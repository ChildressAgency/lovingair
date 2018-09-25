<?php get_header(); ?>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-4">
            <?php
              $locations_page = get_page_by_path('locations');
              $locations_page_id = $locations_page->ID;
              if(have_rows('locations', $locations_page_id)) : while(have_rows('locations', $locations_page_id)) : the_row(); ?>
                <div class="location">
                  <h3><?php the_sub_field('location_name'); ?></h3>
                  <p><?php the_sub_field('street_address'); ?><br /><?php the_sub_field('city_state_zip'); ?></p>
                  <hr />
                  <h3 class="phone-email"><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a><a href="mailto:<?php the_sub_field('email'); ?>">E-Mail Us</a></h3>
                </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <?php if(have_rows('locations', $locations_page_id)): ?>
          <div class="location-map">
            <?php while(have_rows('locations', $locations_page_id)) : the_row(); 
              $location = get_sub_field('map_location');
              $street_address = get_sub_field('street_address');
              $city_state_zip = get_sub_field('city_state_zip');
              $full_address = $street_address . ', ' . $city_state_zip;
              $directions_address = str_replace(' ', '+', $full_address); ?>
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                <h4><?php the_sub_field('location_name'); ?></h4>
                <p class="address"><?php echo $location['address']; ?></p>
                <p><?php the_sub_field('phone_number'); ?></p>
                <p><a href="https://www.google.com/maps/dir/Current+Location/<?php echo $directions_address; ?>" target="_blank">Get Directions</a></p>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>