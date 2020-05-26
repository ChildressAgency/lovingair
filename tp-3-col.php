<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <?php if( get_sub_field( 'section_heading' ) ): ?>
            <div class="section__heading">
                <?php the_sub_field( 'section_heading' ); ?>
            </div>
        <?php endif; ?>

        <?php the_sub_field( 'full_width_text' ); ?>

        <div class="row">
            <?php if( have_rows( 'columns' ) ): $i = 0; while( have_rows( 'columns' ) ): the_row(); ?>
            <div class="col-12 <?php if( $i < 2 ) echo 'col-sm-6'; ?> col-md-4">
                <?php the_sub_field( 'column' ); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>