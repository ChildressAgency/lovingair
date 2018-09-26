<?php 
$bottom_image = get_field( 'bottom_image' ); 
if( $bottom_image['image'] ): ?>

<img src="<?php echo $bottom_image['image']; ?>" class="img-bottom" style="margin-top: <?php echo $bottom_image['top_margin']; ?>;">

<?php endif; ?>