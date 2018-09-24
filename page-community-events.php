<?php get_header(); ?>

    <div class="page-header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/events-hero.png');">
        <div class="dark-overlay">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="section__heading">
                <h3>Fredericksburg</h3>
                <h2>Spring Home Show</h2>
            </div>

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/events-logo.png" class="float-right">

            <h5>March 16-18, 2018</h5>
            <ul>
                <li>Friday March 16, 1:00pm - 8:00pm</li>
                <li>Saturday March 17, 10:00am - 7:00pm</li>
                <li>Sunday March 18, 11:00am - 4:00pm</li>
                <li>Booth number 735</li>
            </ul>

            <h5>Fredericksburg Expo & Conference Center</h5>
            <ul>
                <li>2371 Carl D Silver Parkway</li>
                <li>Fredericksburg VA 22401</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div id="events-carousel" class="carousel slide events__carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#events-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#events-carousel" data-slide-to="1"></li>
                <li data-target="#events-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events-carousel-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events-carousel-1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/events-carousel-1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#events-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#events-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <p class="text-center"><strong>Thank you to everyone who visited us at the home show.<br/>We enjoyed meeting you!</strong></p>
        </div>
    </div>

<?php get_footer(); ?>