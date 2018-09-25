<div class="section reviews container">
    <div class="row">
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="<?php the_sub_field( 'image' ); ?>">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="reviews__heading">Customer Reviews</h2>
            <div class="carousel slide" id="reviews-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php if( have_rows( 'reviews', 'options' ) ): $i = 0; while( have_rows( 'reviews', 'options' ) ): the_row(); ?>
                        <li data-target="#reviews-carousel" data-slide-to="<?php echo $i; ?>"<?php if( $i == 0 ) echo ' class="active"'; ?>></li>
                    <?php $i++; endwhile; endif; ?>
                </ol>
                <div class="carousel-inner">
                    <?php if( have_rows( 'reviews', 'options' ) ): $i = 0; while( have_rows( 'reviews', 'options' ) ): the_row(); ?>
                        <div class="carousel-item<?php if( $i == 0 ) echo ' active'; ?>">
                            <p><?php the_sub_field( 'text' ); ?></p>
                            <p class="carousel__reviewer">- <?php the_sub_field( 'name_location' ); ?></p>
                        </div>
                    <?php $i++; endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>