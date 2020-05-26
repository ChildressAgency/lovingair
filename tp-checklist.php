<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <?php if( get_sub_field( 'section_heading' ) ): ?>
            <div class="section__heading">
                <?php the_sub_field( 'section_heading' ); ?>
            </div>
        <?php endif; ?>

        <?php the_sub_field( 'before_list' ); ?>

        <div class="row">
            <div class="col-12 col-md-6">
                <ul class="checklist checklist--dark">
                    <?php if( have_rows( 'left_checklist' ) ): while( have_rows( 'left_checklist' ) ): the_row(); ?>
                        <li><?php the_sub_field( 'item' ); ?></li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul class="checklist checklist--dark">
                    <?php if( have_rows( 'right_checklist' ) ): while( have_rows( 'right_checklist' ) ): the_row(); ?>
                        <li><?php the_sub_field( 'item' ); ?></li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>

        <?php the_sub_field( 'after_list' ); ?>
    </div>
</div>