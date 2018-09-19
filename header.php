<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width initial-scale=1.0" name="viewport">
    <meta content="The Childress Agency" name="author">
    <meta content="public" http-equiv="cache-control">
    <meta content="private" http-equiv="cache-control">
    
    <title><?php echo get_bloginfo( 'name' ); if(get_bloginfo( 'description' )): echo ' | ' . get_bloginfo( 'description' ); endif; ?></title>

    <?php wp_head(); ?>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
    <!--[if gte IE 9]
    <style type='text/css'>
    footer {
    filter: none;
    }
    </style>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
                <div class="header__main">
                    <div class="header__action">
                        <div class="header__quote">
                            <p class="header__heading">Same Day Service Available</p>
                            <a href="#" class="btn btn-primary">Request A Quote</a>
                        </div>
                        <div class="header__call">
                            <p class="header__heading">Call Us!</p>
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png">
                            <p class="header__phone">(540) 399-1300</p>
                        </div>
                    </div>
                    <div class="header__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php if( is_front_page() ){ echo 'active'; } ?>"><a href="<?php echo esc_url( home_url() ); ?>" class="nav-link">HOME</a></li>
                                <li class="nav-item <?php if( is_page( 'about-us' ) ){ echo 'active'; } ?>"><a href="<?php echo esc_url( home_url( 'about-us' ) ); ?>" class="nav-link">ABOUT US</a></li>
                                <li class="nav-item dropdown <?php if( is_page( 'hvac-services' ) ){ echo 'active'; } ?>">
                                    <a href="<?php echo esc_url( home_url( 'hvac-services' ) ); ?>" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">HVAC SERVICES</a>
                                    <div class="dropdown-menu">
                                        <a href="<?php echo esc_url( home_url( 'heating-services' ) ); ?>" class="dropdown-item">Heating Services</a>
                                        <a href="<?php echo esc_url( home_url( 'air-conditioning-services' ) ); ?>" class="dropdown-item">Air Conditioning Services</a>
                                        <a href="<?php echo esc_url( home_url( 'customer-service-loyalty-agreement' ) ); ?>" class="dropdown-item">Customer Service Loyalty Agreement</a>
                                    </div>
                                </li>
                                <li class="nav-item <?php if( is_page( 'commercial-services' ) ){ echo 'active'; } ?>"><a href="<?php echo esc_url( home_url( 'commercial-services' ) ); ?>" class="nav-link">COMMERCIAL SERVICES</a></li>
                                <li class="nav-item <?php if( is_page( 'contact-us' ) ){ echo 'active'; } ?>"><a href="<?php echo esc_url( home_url( 'contact-us' ) ); ?>" class="nav-link">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
