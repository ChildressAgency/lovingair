<?php 
/** Template Name: Members Template */

get_header(); ?>

    <?php get_template_part( 'tp-banner' ); ?>

    <div class="container">
        <div class="section">
            <?php if( get_field( 'heading' ) ): ?>
                <div class="section__heading">
                    <?php the_field( 'heading' ); ?>
                </div>
            <?php endif; ?>

            <?php if( get_field( 'sub_heading' ) ): ?>
                <div class="section__heading">
                    <?php the_field( 'sub_heading' ); ?>
                </div>
            <?php endif; ?>

            <div class="membership__benefits-wrapper">
                <div class="membership__benefits">
                    <?php if( have_rows( 'benefits' ) ): ?>
                        <ul>
                            <?php while( have_rows( 'benefits' ) ): the_row(); ?>
                            <li>
                                <p><strong><?php the_sub_field( 'text' ); ?></strong></p>
                                <p><?php the_sub_field( 'subtext' ); ?></p>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <img src="<?php the_field( 'benefits_image' ); ?>" alt="">
            </div>
        </div>

        <?php get_template_part( 'tp-flexible-content' ); ?>
    </div>

    <?php get_template_part( 'tp-bottom-image' ); ?>

<?php get_footer(); ?>