<?php

	// add_action('wp_footer', 'show_template');
	// function show_template() {
	// 	global $template;
	// 	print_r($template);
	// }

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
	  wp_enqueue_script('lovingair-script');
	}
	add_action('wp_enqueue_scripts', 'lovingair_scripts', 100);
	
	function lovingair_styles(){
	  wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	  wp_register_style('lovingair', get_template_directory_uri() . '/style.css');
	  
	  wp_enqueue_style('bootstrap-css');
	  wp_enqueue_style('lovingair');
	}
	add_action('wp_enqueue_scripts', 'lovingair_styles');

	// Global Settings
	if(function_exists('acf_add_options_page')){
	  acf_add_options_page(array(
	    'page_title' => 'Global Site Settings',
	    'menu_title' => 'Global Settings',
	    'menu_slug' => 'global-settings',
	    'capability' => 'edit_posts',
	    'redirect' => false
	  ));
	}

	// Reviews
	if(function_exists('acf_add_options_page')){
	  acf_add_options_page(array(
	    'page_title' => 'Reviews',
	    'menu_title' => 'Reviews',
	    'menu_slug' => 'reviews',
	    'capability' => 'edit_posts',
	    'redirect' => false
	  ));
	}

	// load fonts
	function load_fonts() {
		wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Encode+Sans:300,400,700', false );
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

	// remove p tags from images
	function filter_ptags_on_images( $content ){
	    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	add_filter('the_content', 'filter_ptags_on_images');

	// Google Maps Api Scripts for ACF
	function acf_google_map_scripts() {
		$api_key = 'https://maps.googleapis.com/maps/api/js?key=';
		$api_key .= get_field( 'google_maps_api_key', 'options' );

		wp_enqueue_script( 'google-map', $api_key, array(), '3', true );
		wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/map.js', array('google-map', 'jquery'), '0.1', true );
	}
	add_action( 'wp_enqueue_scripts', 'acf_google_map_scripts' );

	// Google Maps Api Key for ACF
	function acf_google_map_api( $api ){
		$api['key'] = get_field( 'google_maps_api_key', 'options' );
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'acf_google_map_api');

	// Custom Nav Walker
	class Custom_Nav_Walker extends Walker_Nav_Menu {

	    function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
	        global $post;
	        $pageID = $post->ID; // id of current page
			$title = $item->title; // title of menu item
			$objectID = $item->object_id; // page id of menu item
			$permalink = $item->url; // link of menu item
			$hasChildren = in_array( 'has-children', $item->classes ); // whether the menu item has children
			$parent = $item->menu_item_parent; // the parent of the current menu item

			// if the current menu item has a parent, then it is a dropdown item
			if( $parent ){
				$output .= "<a class=\"dropdown-item\" href=\"" . $permalink . "\">";
				$output .= $title;
				$output .= "</a>";
			} else {
				$output .= "<li class=\"nav-item";

				// if this item has children, then it is a dropdown menu
				if( $hasChildren )
					$output .= " dropdown";

				// if this item goes to this page, then highlight it
				if( $objectID == $pageID )
					$output .= " active";

				// close the tag
				$output .= "\">";


				// if this item is a dropdown menu, it needs some extra info
				if( $hasChildren ){
					$output .= "<a href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">";
				}
				else{
					$output .= "<a href=\"" . $permalink . "\" class=\"nav-link\">";
				}

				// item title and close the tag
				$output .= $title;
				$output .= "</a>";
			}
		}

		// same as the default function, except the class is 'dropdown-menu' instead of 'sub-menu'
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