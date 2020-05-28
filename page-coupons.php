<?php get_header(); ?>

    <?php get_template_part( 'tp-banner' ); ?>

    <article>
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>

      <?php if(have_rows('coupons')): while(have_rows('coupons')): the_row(); ?>
        <div class="coupon mt-5">
          <?php
            $coupon_img = get_sub_field('coupon_image');
            if($coupon_img): ?>
              <img src="<?php echo esc_url($coupon_img['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($coupon_img['alt']); ?>" />
              <button class="btn btn-primary contact__submit print-coupon" data-coupon_img="<?php echo esc_url($coupon_img['url']); ?>">Print Coupon</button>
          <?php endif; ?>
        </div>
      <?php endwhile; endif; ?>
    </article>

    <?php get_template_part( 'tp-bottom-image' ); ?>

<?php get_footer(); ?>