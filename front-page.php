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
                        <h2 class="carousel__heading">HVAC Specialists</h2>
                        <p class="carousel__subheading">Serving the Greater region of Fredericksburg</p>
                        <a href="#" class="btn btn-secondary carousel__btn">See what we have to offer</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-2.png');">
                    <div class="carousel-caption">
                        <h2 class="carousel__heading">Experienced Technicians</h2>
                        <p class="carousel__subheading">You Won't Like Us, You'll Love Us!</p>
                        <p>Our experienced technicians solve complex home and business comfort problems quickly and affordably while respecting your time and property. When you call the Loving Air Inc. team, you’ll speak directly to a member of our team rather than being funneled through a maze of voice recordings.</p>
                        <a href="#" class="btn btn-secondary carousel__btn">See what we have to offer</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/carousel-3.png');">
                    <div class="carousel-caption">
                        <h2 class="carousel__heading">Available 24/7</h2>
                        <p class="carousel__subheading">We offer affordable emergency residential and commercial HVAC service if needed.</p>
                        <a href="#" class="btn btn-secondary carousel__btn">See what we have to offer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>