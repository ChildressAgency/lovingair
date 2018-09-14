<?php get_header(); ?>

    <div class="home-hero">
        <div class="carousel-sidebar">
            <h2>MEMBERSHIP DEALS</h2>
            <p>PRIORITY SERVICES MEMBERSHIP IS FREE</p>
            <div class="discount">
                <div class="discount__flag"></div>
                <span>15% Discount</span><!-- skew boxes on the side -->
            </div>
            <a href="" class="btn btn-primary">SIGN UP</a>
        </div>
        <div class="carousel slide" id="home-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-1.png');">
                    <div class="carousel-caption">
                        <h2>HVAC Specialists</h2>
                        <p>Serving the Greater region of Fredericksburg</p>
                        <a href="#" class="btn btn-secondary">See what we have to offer</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-1.png');">
                    <div class="carousel-caption">
                        <h2>HVAC Specialists</h2>
                        <p>Serving the Greater region of Fredericksburg</p>
                        <a href="#" class="btn btn-secondary">See what we have to offer</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-1.png');">
                    <div class="carousel-caption">
                        <h2>HVAC Specialists</h2>
                        <p>Serving the Greater region of Fredericksburg</p>
                        <a href="#" class="btn btn-secondary">See what we have to offer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>