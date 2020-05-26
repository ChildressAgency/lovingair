<div class="section--background" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
    <div class="dark-overlay">
        <div class="container text-center">
            <?php the_sub_field( 'section_heading' ); ?>
            <?php the_sub_field( 'full_width_text' ); ?>
            <div class="row text-left">
                <?php if( have_rows( 'columns' ) ): $i = 0; while( have_rows( 'columns' ) ): the_row(); ?>
                <div class="col-12 <?php if( $i < 2 ) echo 'col-sm-6'; ?> col-md-4">
                    <?php the_sub_field( 'column' ); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>