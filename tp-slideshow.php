<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <div id="slideshow" class="carousel slide events__carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if( have_rows( 'slideshow' ) ): $i = 0; while( have_rows( 'slideshow' ) ): the_row(); ?>
                    <li data-target="#slideshow" data-slide-to="<?php echo $i; ?>" <?php if( $i == 0 ) echo 'class="active"'; ?>></li>
                <?php $i++; endwhile; endif; ?>
            </ol>
            <div class="carousel-inner">
                <?php if( have_rows( 'slideshow' ) ): $i = 0; while( have_rows( 'slideshow' ) ): the_row(); ?>
                    <div class="carousel-item <?php if( $i == 0 ) echo 'active'; ?>">
                        <img class="d-block w-100" src="<?php the_sub_field( 'image' ); ?>" alt="Slide <?php echo $i; ?>">
                    </div>
                <?php $i++; endwhile; endif; ?>
            </div>
            <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>