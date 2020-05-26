<?php
/*
    Template Name: Landing Page Template
*/
get_header(); ?>

    <?php get_template_part( 'tp-banner' ); ?>

    <article>
        <?php get_template_part( 'tp-flexible-content' ); ?>
    </article>

    <?php get_template_part( 'tp-bottom-image' ); ?>

<?php get_footer(); ?>