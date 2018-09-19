<?php get_header(); ?>

    <div class="header__announcement">
        <p>September Special - Save 15% on all Services!</p>
    </div>

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

    <div class="promotions">
        <div class="promotions__header section">
            <div class="section__heading">
                <h3>Check Out Our</h3>
                <h2>Special Promotions</h2>
            </div>
            <!-- <h2>Check Out Our<br/><span class="side-borders"><span class="promotions__subheading">Special Promotions!</span></span></h2> -->
            <div class="promotions__arrow"></div>
        </div>
        <div class="promotions__content container section">
            <div class="row">
                <div class="col-4">
                    <a href="#"><h3 class="promotions__title">Free Aprilaire Digital Programmable Thermostat</h3></a>
                    <p class="promotions__excerpt">with the purchase of a New System. ($250 value)<br/>Offer expires August 31, 2018</p>
                </div>
                <div class="col-4">
                    <a href="#"><h3 class="promotions__title">Looking for financing options? We’ve got you covered!!</h3></a>
                    <p class="promotions__excerpt">72 Month Financing Available 0% APR<br/>Call Us for details</p>
                </div>
                <div class="col-4">
                    <a href="#"><h3 class="promotions__title">Get Your $49 Season Tune Up</h3></a>
                    <p class="promotions__excerpt">We guarantee that you will save $100 on your next electrical bill between now and the next 6 months or we will refund your money back! We will also waive the service fee through the end of summer and offer 15% off</p>
                </div>
            </div>
        </div>
    </div>

    <div class="slash-separator"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slash-separator.png"></div>

    <div class="section container">
        <div class="section__heading">
            <h2>Our Services</h2>
        </div>

        <p>Whether it’s summer or winter, keep your home or business at a comfortable temperature. Our team of friendly technicians can find a heating or cooling solution that suits your needs. We offer comprehensive maintenance programs to ensure that your heating and cooling systems perform efficiently all year round.</p>

        <div class="row services section">
            <a class="col-4 services__service" href="#">
                <div class="services__image-wrapper">
                    <img class="services__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-1-hover.png">
                    <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-1.png">
                </div>
                <h3 class="services__title" >HEATING</h3>
            </a>
            <a class="col-4 services__service" href="#">
                <div class="services__image-wrapper">
                    <img class="services__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-2-hover.png">
                    <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-2.png">
                </div>
                <h3 class="services__title" >COOLING</h3>
            </a>
            <a class="col-4 services__service" href="#">
                <div class="services__image-wrapper">
                    <img class="services__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-3-hover.png">
                    <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-3.png">
                </div>
                <h3 class="services__title" >COMMERCIAL</h3>
            </a>
        </div>
    </div>

    <div class="section--background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/ac-units.png');">
        <div class="dark-overlay">
            <div class="container text-center">
                <h2>Over 20 Years of Experience</h2>
                <h3>You Won't Like Us, You'll Love Us!</h3>
                <p>The professionals at Loving Air Inc can do everything from repairs, service & maintenance to complete system upgrades and new installations.</p>
                <div class="row text-left">
                    <div class="col-4">
                        <ul class="checklist">
                            <li>Family Owned and Operated</li>
                            <li>Fully Licensed and Insured</li>
                            <li>Quick Response Time</li>
                            <li>Class A Virginia Contractor's License</li>
                            <li>Industry Standard Warranties</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="checklist">
                            <li>2 Hour Window on Appointments</li>
                            <li>VA Master HVAC Technician</li>
                            <li>Extended Warranties Available</li>
                            <li>Same Day Service*</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/amana-logo.png" alt="">
                        <p>Loving Air Inc. is proud to carray Amana Heating and Air systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section reviews container">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/reviews-dog.png" alt="">
            </div>
            <div class="col-6">
                <h2 class="reviews__heading">Customer Reviews</h2>
                <div class="carousel slide" id="reviews-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#reviews-carousel" data-slide-to="1"></li>
                        <li data-target="#reviews-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>A great service today! Thank you for coming to our rescue. After many different experiences with places we felt like did not serve us, we were THRILLED with your honest assessment of the situation, how quickly you identified the issue, and fixed it quickly, without just trying to sell us a whole new system. We will definitely be using you again!</p>
                            <p class="carousel__reviewer">- Victoria McCollum, Fredericksburg, VA</p>
                        </div>
                        <div class="carousel-item">
                            <p>A great service today! Thank you for coming to our rescue. After many different experiences with places we felt like did not serve us, we were THRILLED with your honest assessment of the situation, how quickly you identified the issue, and fixed it quickly, without just trying to sell us a whole new system. We will definitely be using you again!</p>
                            <p class="carousel__reviewer">- Victoria McCollum, Fredericksburg, VA</p>
                        </div>
                        <div class="carousel-item">
                            <p>A great service today! Thank you for coming to our rescue. After many different experiences with places we felt like did not serve us, we were THRILLED with your honest assessment of the situation, how quickly you identified the issue, and fixed it quickly, without just trying to sell us a whole new system. We will definitely be using you again!</p>
                            <p class="carousel__reviewer">- Victoria McCollum, Fredericksburg, VA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="section__heading">
            <h2>Our Guarantee</h2>
        </div>

        <p>Loving Air Inc. is a premier provider of heating and cooling services for residents and businesses in the Fredericksburg, Spotsylvania, Stafford, King George, Culpeper, Orange, Locust Grove, Lake Anna, and surrounding areas. We pay attention to detail and will make sure each customer is completely satisfied.</p>
        <p>Participating business in Rappahannock Electric Cooperative Co-op Connection Program.</p>
        <img class="img-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rappahannock-electric-cooperative-logo.png">
    </div>

    <div class="slash-separator"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slash-separator.png"></div>

    <div class="section container">
        <div class="row">
            <div class="col-6">
                <div class="section__heading">
                    <h2>Financing Available</h2>
                </div>
                
                <p>We offer Same-As-Cash financing with no payments and no interest for 18 months!* Apply now through EnerBank USA</p>
                <p class="fine-print">*Loans provided by EnerBank USA, Member FDIC, (1245 Brickyard Rd., Suite 600, Salt Lake City, UT 84106) on approved credit, for a limited time. Repayment terms vary from 24 to 132 months. Interest waived if repaid in 365 days. 18.10% fixed APR, effective as of September 1, 2018, subject to change. Interest starts accruing when the loan closes.</p>
            </div>
            <div class="col-6">
                <a href="#"><img class="img-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/financing.png"></a>
            </div>
        </div>
    </div>

    <div class="home-contact">
        <h2 class="home-contact__heading">Contact Us</h2>
        <div class="home-contact__info">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p><strong>Hours of Operation</strong></p>
                        <p>Mon-Fri 7:30 AM to 4:30 PM<br/>After Hours Emergency Services,<br/>Including Saturday & Sunday</p>
                    </div>
                    <div class="col-6">
                        <p><strong>Location</strong></p>
                        <p>406 Hudgins Rd<br/>Suite F<br/>Fredericksburg, VA 22408</p>
                        <p><strong>Phone:</strong> (540) 399-1300</p>
                        <p><strong>Find us on: </strong><span class="footer__social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-twitter"></i></a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <img class="home-contact__map" src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-with-marker.png">
    </div>

<?php get_footer(); ?>