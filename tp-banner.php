<?php if(is_singular()): ?>
  <?php
    $banner_image = get_field('banner_image');
    if(!$banner_image){
      $banner_image = 'https://lovingairinc.com/wp-content/uploads/2018/09/about-hero.png';
    }
  ?>
  <div class="page-header" style="background-image:url(<?php echo esc_url($banner_image); ?>);">
    <div class="dark-overlay">
      <h1><?php the_title(); ?>
    </div>
  </div>
    
<?php endif; ?>