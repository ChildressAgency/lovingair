<?php if( get_field( 'banner_image' ) ): ?>
<div class="page-header" style="background-image: url('<?php the_field( 'banner_image' ); ?>');">
    <div class="dark-overlay">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<?php endif; ?>