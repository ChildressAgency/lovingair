<?php
	function jquery_cdn(){
	  if(!is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
		wp_enqueue_script('jquery');
	  }
	}
	add_action('wp_enqueue_scripts', 'jquery_cdn');
	function lovingair_scripts(){
	  wp_register_script(
		'bootstrap-script', 
		'//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 
		array('jquery'), 
		'', 
		true
	  );
	  wp_register_script(
		'lovingair-script', 
		'/wp-content/themes/lovingair/js/lovingair-script.js', 
		array('jquery'), 
		'', 
		true
	  );
	  
	  wp_enqueue_script('bootstrap-script');
	  //wp_enqueue_script('lovingair-script');
	}
	add_action('wp_enqueue_scripts', 'lovingair_scripts', 100);
	
	function lovingair_styles(){
	  wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	  wp_register_style('lovingair', get_template_directory_uri() . '/style.css');
	  
	  wp_enqueue_style('bootstrap-css');
	  wp_enqueue_style('lovingair');
	}
	add_action('wp_enqueue_scripts', 'lovingair_styles');

	if(function_exists('acf_add_options_page')){
	  acf_add_options_page(array(
	    'page_title' => 'Global Site Settings',
	    'menu_title' => 'Global Settings',
	    'menu_slug' => 'global-settings',
	    'capability' => 'edit_posts',
	    'redirect' => false
	  ));
	}

	// load fonts
	function load_fonts() {
		wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Encode+Sans:300,400,700', false );
	}
	add_action( 'wp_enqueue_scripts', 'load_fonts' );

	// load font awesome
	function load_font_awesome(){
		wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css');
	}
	add_action('wp_enqueue_scripts','load_font_awesome');

	// Register Navigation Menus
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	) );






	// Custom Nav Walker
	class Custom_Nav_Walker extends Walker_Nav_Menu {

	    function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
	        global $post;
	        $pageID = $post->ID;
	        $object = $item->object;
			$type = $item->type;
			$title = $item->title;
			$objectID = $item->object_id;
			$description = $item->description;
			$permalink = $item->url;
			$hasChildren = in_array( 'has-children', $item->classes );
			$parent = $item->menu_item_parent;

			if( $parent ){
				$output .= "<a class=\"dropdown-item\" href=\"" . $permalink . "\">";
				$output .= $title;
				$output .= "</a>";
			} else {
				$output .= "<li class=\"nav-item";
				if( $hasChildren )
					$output .= " dropdown";
				if( $objectID == $pageID )
					$output .= " active";
				$output .= "\">";


				if( $hasChildren ){
					$output .= "<a href=\"#\" class=\"nav-link dropdown-toggle";

					$output .= "\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">";
				}
				else{
					$output .= "<a href=\"" . $permalink . "\" class=\"nav-link";

					$output .= "\">";
				}

				$output .= $title;
				$output .= "</a>";
			}
		}

		function start_lvl( &$output, $depth = 0, $args = array() ){
			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			        $t = '';
			        $n = '';
			    } else {
			        $t = "\t";
			        $n = "\n";
			    }
			    $indent = str_repeat( $t, $depth );
			 
			    // Default class.
			    $classes = array( 'dropdown-menu' );
			 
			    /**
			     * Filters the CSS class(es) applied to a menu list element.
			     *
			     * @since 4.8.0
			     *
			     * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
			     * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			     * @param int      $depth   Depth of menu item. Used for padding.
			     */
			    $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
			    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			 
			    $output .= "{$n}{$indent}<ul$class_names>{$n}";
		}
	}

	// if a nav item has children, add the 'has-children' class to it
	function add_has_children_to_nav_items( $items )
	{
	    $parents = wp_list_pluck( $items, 'menu_item_parent');

	    foreach ( $items as $item )
	        in_array( $item->ID, $parents ) && $item->classes[] = 'has-children';

	    return $items;
	}
	add_filter( 'wp_nav_menu_objects', 'add_has_children_to_nav_items' );
?>