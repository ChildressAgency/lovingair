<?php

// check if the flexible content field has rows of data
if( have_rows('custom_fields') ):

     // loop through the rows of data
    while ( have_rows('custom_fields') ) : the_row();

        if( get_row_layout() == 'separator' ):
            echo "<div class=\"slash-separator\"><img src=\"" . get_stylesheet_directory_uri() . "/images/slash-separator.png\"></div>";

        elseif( get_row_layout() == 'basic_full_width' ):
            get_template_part( 'tp-basic-full-width' );

        elseif( get_row_layout() == 'services' ):
            get_template_part( 'tp-services' );

        elseif( get_row_layout() == '2_col' ):
            get_template_part( 'tp-2-col' );

        elseif( get_row_layout() == '3_col' ):
            get_template_part( 'tp-3-col' );

        elseif( get_row_layout() == 'checklist' ):
            get_template_part( 'tp-checklist' );

        elseif( get_row_layout() == 'slideshow' ):
            get_template_part( 'tp-slideshow' );

        elseif( get_row_layout() == '3_col_with_background' ):
            get_template_part( 'tp-3-col-with-background' );

        elseif( get_row_layout() == 'img_with_context_box' ):
            get_template_part( 'tp-img-with-context-box' );

        elseif( get_row_layout() == 'reviews' ):
            get_template_part( 'tp-reviews' );

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>