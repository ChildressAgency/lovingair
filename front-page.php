<?php get_header(); ?>

    <?php if(have_rows('header_announcements')): ?>
      <div class="header__announcement">
        <?php while(have_rows('header_announcements')): the_row(); ?>
          <?php
            $start_date = get_sub_field('announcement_start_date');
            $end_date = get_sub_field('announcement_end_date');

            if(lovingair_can_display_announcement($start_date, $end_date)){
              $announcement = get_sub_field('announcement');
              $link = get_sub_field('announcement_link');

              echo '<p>';
                if($link){
                  echo '<a href="' . esc_url($link['url']) . '">' . esc_html($announcement) . '</a>';
                }
                else{
                  echo esc_html($announcement);
                }
              echo '</p>';
            }
          ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <div class="home-hero">
      <?php $discountFlag = get_field( 'discount_flag' ); 
        if( $discountFlag ): ?>
            <div class="carousel-sidebar">
                <h2><?php echo $discountFlag['title']; ?></h2>
                <p><?php echo $discountFlag['text']; ?></p>
                <div class="discount">
                    <div class="discount__flag"></div>
                    <span><?php echo $discountFlag['discount']; ?></span>
                </div>
                <a href="<?php echo $discountFlag['link']; ?>" class="btn btn-primary">SIGN UP</a>
            </div>
        <?php endif; ?>

        <div class="carousel slide" id="home-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if( have_rows( 'homepage_carousel' ) ): $i = 0; while( have_rows( 'homepage_carousel' ) ): the_row(); ?>
                    <li data-target="#home-carousel" data-slide-to="<?php echo $i; ?>" <?php if( $i == 0 ) echo 'class="active"'; ?>></li>
                <?php $i++; endwhile; endif; ?>
            </ol>
            <div class="carousel-inner">
                <?php if( have_rows( 'homepage_carousel' ) ): $i = 0; while( have_rows( 'homepage_carousel' ) ): the_row(); ?>
                  <?php if(get_sub_field('carousel_type') == 'video'): ?>
                    <?php 
                      $background_color = get_sub_field('background_color');
                      if(!$background_color){ $background_color = '#333'; }
                    ?>
                    <div class="carousel-item<?php if($i == 0){ echo ' active'; } ?>" style="background-color:<?php echo $background_color; ?>">
                      <div class="carousel-caption">
                        <div class="embed-responsive embed-responsive-16by9">
                          <?php the_sub_field('video'); ?>
                        </div>
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="carousel-item <?php if( $i == 0 ) echo 'active'; ?>" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
                        <div class="carousel-caption">
                            <?php if( get_sub_field( 'heading' ) ): ?><h2 class="carousel__heading"><?php the_sub_field( 'heading' ); ?></h2><?php endif; ?>
                            <?php if( get_sub_field( 'subheading' ) ): ?><p class="carousel__subheading"><?php the_sub_field( 'subheading' ); ?></p><?php endif; ?>
                            <?php if( get_sub_field( 'text' ) ): ?><p><?php the_sub_field( 'text' ); ?></p><?php endif; ?>
                            <?php if( get_sub_field( 'link' ) ): ?><a href="<?php the_sub_field( 'link' ); ?>" class="btn btn-secondary carousel__btn"><?php the_sub_field( 'button_text' ); ?></a><?php endif; ?>
                        </div>
                    </div>
                  <?php endif; ?>
                <?php $i++; endwhile; endif; ?>
            </div>
        </div>
    </div>

    <article>
        <div class="promotions">
            <div class="promotions__header section">
                <div class="section__heading">
                    <?php the_field( 'promotions_heading' ); ?>
                </div>
                <div class="promotions__arrow"></div>
            </div>
            <div class="promotions__content container section">
                <div class="row">
                    <?php if( have_rows( 'promotions' ) ): while( have_rows( 'promotions' ) ): the_row(); ?>
                        <div class="col-12 col-md-4">
                            <?php if( get_sub_field( 'link' ) ) echo '<a href="' . get_sub_field( 'link' ) . '">'; ?><h3 class="promotions__title"><?php the_sub_field( 'title' ); ?></h3><?php if( get_sub_field( 'link' ) ) echo '</a>'; ?>
                            <p class="promotions__excerpt"><?php the_sub_field( 'excerpt' ); ?></p>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

        <?php get_template_part( 'tp-flexible-content' ); ?>
        
        <div class="home-contact">
            <h2 class="home-contact__heading">Contact Us</h2>
            <div class="home-contact__info">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p><strong>Hours of Operation</strong></p>
                            <p><?php the_field( 'hours_of_operation', 'options' ); ?></p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <p><strong>Location</strong></p>
                            <?php $location = get_field( 'location', 'options' ); ?>
                            <p><?php echo $location['address_1']; ?><br/><?php echo $location['address_2']; ?><br/><?php echo $location['city_state_zip']; ?></p>
                            <?php //$phone = lovingair_get_phone_number(); ?>
                            <?php $phone = get_field('phone', 'option'); ?>
                            <p><strong>Phone: </strong><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                            <p><strong>Find us on: </strong>
                                <span class="footer__social">
                                    <?php if( get_field( 'facebook', 'options' ) ): ?><a href="<?php the_field( 'facebook', 'options' ); ?>"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                                    <?php if( get_field( 'twitter', 'options' ) ): ?><a href="<?php the_field( 'twitter', 'options' ); ?>"><i class="fab fa-twitter"></i></a><?php endif; ?>
                                    <?php if( get_field( 'instagram', 'options' ) ): ?><a href="<?php the_field( 'instagram', 'options' ); ?>"><i class="fab fa-instagram"></i></a><?php endif; ?>
                                    <?php if( get_field( 'google_plus', 'options' ) ): ?><a href="<?php the_field( 'google_plus', 'options' ); ?>"><i class="fab fa-google-plus-g"></i></a><?php endif; ?>
                                    <?php if( get_field( 'linkedin', 'options' ) ): ?><a href="<?php the_field( 'linkedin', 'options' ); ?>"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            $location = get_field('location');

            if( !empty($location) ):?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            <?php endif; ?>
            <!-- <?php 
            $key = get_field( 'google_maps_key', 'options' );
            $location = get_field( 'location', 'options' );
            $address = $location['address_1'] . " " . $location['address_2'] . " " . $location['city_state_zip'];
            $address = str_replace( " ", "+", $address );
            ?>
            <iframe
                class="home-contact__map"
                width="600"
                height="450"
                frameborder="0" style=feature:all|element:labels|visibility:off
                src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>" allowfullscreen>
            </iframe> -->
            <!-- <img class="home-contact__map" src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-with-marker.png"> -->
        </div>
    </article>

<?php get_footer(); ?>