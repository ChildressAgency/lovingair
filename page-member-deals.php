<?php get_header(); ?>

    <div class="page-header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-hero.png');">
        <div class="dark-overlay">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="section__heading">
                <h2>Member Exclusive Deals</h2>
                <h4>For Customers of Loving Air Inc</h4>
            </div>

            <div class="section__heading">
                <h3>Priority Services Membership is FREE!</h3>
                <h6><?php the_field( 'phone', 'options' ); ?> | <?php the_field( 'email', 'options' ); ?></h6>
            </div>

            <div class="membership__benefits-wrapper">
                <div class="membership__benefits">
                    <ul>
                        <li>
                            <p><strong>3 YEAR PARTS & LABOR WARRANTY</strong></p>
                            <p>On all repairs</p>
                        </li>
                        <li>
                            <p><strong>NO HASSLE GUARANTEE</strong></p>
                            <p>You can Cancel the membership at ANY time</p>
                        </li>
                        <li>
                            <p><strong>15% DISCOUNT</strong></p>
                            <p>On all repairs, Inluding TODAY'S and ANY FUTURE REPAIRS</p>
                        </li>
                        <li>
                            <p><strong>V.I.P. RAPID RESPONSE PRIORITY SERVICE</strong></p>
                            <p>Call any time before noon and get a guaranteed SAME DAY SERVICE</p>
                        </li>
                        <li>
                            <p><strong>2 SEASONAL TUNE-UPS ONLY $69 FOR THE FIRST SYSTEM</strong></p>
                            <p>On all repairs, Inluding TODAY'S and ANY FUTURE REPAIRS</p>
                        </li>
                    </ul>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/members-only.png">
            </div>

            <div class="membership__partners">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/extreme-care.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/everrest-group.png">
            </div>
        </div>

        <div class="section">
            <h5 class="text-center">Pleae enter your information here to join</h5>
            <?php echo do_shortcode( '[contact-form-7 id="54" title="Membership Form"]' ); ?>
        </div>
    </div>

<?php get_footer(); ?>