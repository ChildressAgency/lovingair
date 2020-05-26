<?php 
/** Template Name: Contact Template */

get_header(); ?>

    <?php get_template_part( 'tp-banner' ); ?>

    <div class="container">
        <div class="section section--thin">
            <?php if( get_field( 'section_heading' ) ): ?>
                <div class="section__heading">
                    <?php the_field( 'section_heading' ); ?>
                </div>
            <?php endif; ?>
        
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4><?php the_field( 'contact_info_heading' ); ?></h4>
        
                    <div class="contact__info-box">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <p><strong>Address</strong></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <?php $location = get_field( 'location', 'options' ); ?>
                                <p><?php echo $location['address_1']; ?><br/><?php echo $location['address_2']; ?><br/><?php echo $location['city_state_zip']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact__info-box">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <p><strong>Phone</strong></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <?php //$phone = lovingair_get_phone_number(); ?>
                                <?php $phone = get_field('phone', 'option'); ?>
                                <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact__info-box">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <p><strong>Email</strong></p>
                            </div>
                            <div class="col-12 col-md-8">
                                <p><a href="mailto:<?php the_field( 'email', 'options' ); ?>"><?php the_field( 'email', 'options' ); ?></a></p>
                            </div>
                        </div>
                    </div>

                    <p><strong><?php the_field( 'accepted_cards' ); ?></strong></p>

                </div>
                <div class="col-12 col-md-6">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-map.png" class="img-center"> -->
                    <?php 
                    $location = get_field('location');

                    if( !empty($location) ):?>
                        <div class="acf-map acf-map--contact">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php 
    $side_images = get_field( 'side_images' ); 
    if( $side_images ): ?>
        <div class="contact__side-images">
            <img class="contact__img contact__img--left" src="<?php echo $side_images['left_image']['url']; ?>" alt="<?php echo $side_images['left_image']['alt']; ?>">
            <img class="contact__img contact__img--right" src="<?php echo $side_images['right_image']['url']; ?>" alt="<?php echo $side_images['right_image']['alt']; ?>">
        </div>
    <?php endif; ?>

    <?php get_template_part( 'tp-flexible-content' ); ?>

    <!-- <div class="container">
        <div class="section section--thin">
            <div class="section__heading">
                <h4>Our Family Looks forward to Working With Your Family!<br/>Call or Fill Out the Form for Immediate Service.</h4>
            </div>

            <h5 class="text-center">Request a Quote or Send us a Message</h5>
            <?php //echo do_shortcode( '[contact-form-7 id="27" title="Contact Form"]' ); ?>
        </div>
    </div> -->

    <?php get_template_part( 'tp-bottom-image' ); ?>

<?php get_footer(); ?>