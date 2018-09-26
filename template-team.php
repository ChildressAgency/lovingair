<?php 
/** Template Name: Team Template */

get_header(); ?>

    <?php get_template_part( 'tp-banner' ); ?>

    <?php get_template_part( 'tp-flexible-content' ); ?>

    <div class="container">
        <div class="section section--thin">
            <div class="section__heading">
                <h2><?php the_field( 'team_heading' ); ?></h2>
            </div>

            <div class="row team__row">
                <?php if( have_rows( 'team_members' ) ): $i = 0; while( have_rows( 'team_members' ) ): the_row(); ?>
                    
                    <?php if( $i != 0 && $i % 2 == 0 ): ?>
                        </div>
                        <div class="row team__row">
                    <?php endif; ?>

                    <div class="col-12 col-md-6">
                        <img src="<?php the_sub_field( 'image' ); ?>" class="img-center">
                        <p class="team__name"><?php the_sub_field( 'name' ); ?></p>
                    </div>
                <?php $i++; endwhile; endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>