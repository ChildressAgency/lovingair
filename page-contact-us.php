<?php get_header(); ?>

    <div class="page-header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-hero.png');">
        <div class="dark-overlay">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="section section--thin">
            <div class="section__heading">
                <h2>HVAC Specialists</h2>
                <h4>Contact Loving Air Inc Today!</h4>
            </div>
        
            <div class="row">
                <div class="col-6">
                    <h4>Contact Information</h4>
        
                    <div class="contact__info-box">
                        <div class="row">
                            <div class="col-4">
                                <p><strong>Address</strong></p>
                            </div>
                            <div class="col-8">
                                <p>406 Hudgins Rd<br/>Suite F<br/>Fredericksburg, VA 22408</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact__info-box">
                        <div class="row">
                            <div class="col-4">
                                <p><strong>Phone</strong></p>
                            </div>
                            <div class="col-8">
                                <p>(540) 399-1300</p>
                            </div>
                        </div>
                    </div>

                    <p><strong>We accept Visa, MasterCard, Discover, Cash, and Check payment options</strong></p>

                </div>
                <div class="col-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-map.png" class="img-center">
                </div>
            </div>
        </div>
    </div>

    <div class="contact__side-images">
        <img class="contact__img contact__img--left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-dog.png">
        <img class="contact__img contact__img--right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-fan.png">
    </div>

    <div class="container">
        <div class="section section--thin">
            <div class="section__heading">
                <h4>Our Family Looks forward to Working With Your Family!<br/>Call or Fill Out the Form for Immediate Service.</h4>
            </div>

            <h5 class="text-center">Request a Quote or Send us a Message</h5>
            <?php echo do_shortcode( '[contact-form-7 id="27" title="Contact Form"]' ); ?>
        </div>
    </div>

<?php get_footer(); ?>