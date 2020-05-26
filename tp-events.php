<?php 
/** Template Name: Events Template */

get_header(); ?>

<?php get_template_part( 'tp-banner' ); ?>

<?php

$query = new WP_Query( array(
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'posts_per_page'    => -1
) );

if( $query->have_posts() ): ?>

    <main id="main">
        <section class="content">
            <div class="container">
                <?php $i = 0; while( $query->have_posts() ): $query->the_post(); ?>

                    <?php if( $i != 0 ) echo "<div class=\"slash-separator\"><img src=\"" . get_stylesheet_directory_uri() . "/images/slash-separator.png\"></div>"; ?>
                    
                    <?php get_template_part( 'tp-flexible-content' ); ?>

                <?php $i++; endwhile; ?>
            </div>
        </section>
    </main>

<?php endif; ?>

<?php get_footer(); ?>