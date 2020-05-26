<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php if( get_sub_field( 'left_heading' ) ): ?>
                    <div class="section__heading">
                        <?php the_sub_field( 'left_heading' ); ?>
                    </div>
                <?php endif; ?>
                
                <?php the_sub_field( 'left_content' ); ?>
            </div>
            <div class="col-12 col-md-6">
                <?php if( get_sub_field( 'right_heading' ) ): ?>
                    <div class="section__heading">
                        <?php the_sub_field( 'right_heading' ); ?>
                    </div>
                <?php endif; ?>
    
                <?php the_sub_field( 'right_content' ); ?>
            </div>
        </div>
    </div>
</div>