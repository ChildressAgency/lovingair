<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <div class="section__heading">
            <?php the_sub_field( 'section_heading' ); ?>
        </div>
    
        <?php the_sub_field( 'section_text' ); ?>
    
        <div class="row services section">
            <?php if( have_rows( 'services' ) ): while( have_rows( 'services' ) ): the_row(); ?>
                <a class="col-12 col-md-4 services__service" href="<?php the_sub_field( 'service_link' ); ?>">
                    <div class="services__image-wrapper">
                        <?php 
                            $hover_icon = get_sub_field('hover_icon');
                            $image = get_sub_field('image');
                        ?>
                        <img class="services__icon" src="<?php echo $hover_icon['url']; ?>" alt="<?php echo $hover_icon['alt']; ?>">
                        <img class="services__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                    <h3 class="services__title"><?php the_sub_field( 'service_name' ); ?></h3>
                </a>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>