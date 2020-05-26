<div class="container">
    <div class="section <?php if( get_sub_field( 'is_thin' ) ) echo 'section--thin'; ?>">
        <?php if( get_sub_field( 'section_heading' ) ): ?>
            <div class="section__heading">
                <?php the_sub_field( 'section_heading' ); ?>
            </div>
        <?php endif; ?>
    
        <?php the_sub_field( 'content' ); ?>
    </div>
</div>