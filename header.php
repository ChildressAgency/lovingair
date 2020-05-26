<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width initial-scale=1.0" name="viewport">
    <meta content="The Childress Agency" name="author">
    <meta content="public" http-equiv="cache-control">
    <meta content="private" http-equiv="cache-control">
	
	<title><?php echo get_bloginfo( 'name' ); if( get_bloginfo( 'description' ) ): echo ' | ' . get_bloginfo( 'description' ); endif; ?></title>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5QP3G8R');</script>
<!-- End Google Tag Manager -->

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
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QP3G8R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Loving Air Logo"></a>
                <div class="header__main">
                    <div class="header__action">
					<!--Social icons-->
					   <div class="header_icons">
						   <ul class="icons">
							   <li> <a href="https://www.facebook.com/lovingairincva/" class="fab fa-facebook-square fa-2x " target="_blank"  ></a></li>
							   <li><a href="https://www.instagram.com/lovingairinc/" class="fab fa-instagram fa-2x " target="_blank" ></a></li>
							   <li><a href="https://twitter.com/lovingairinc" class="fab fa-twitter-square fa-2x " target="_blank" ></a></li>
						   </ul>
						</div>  
					<!--end of social icons-->
                        <div class="header__quote">
                            <p class="header__heading">Same Day Service Available</p>
                            <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="btn btn-primary">Request Appointment</a>
                        </div>
                        <div class="header__call">
                            <p class="header__heading">Call Us!</p>
                            
                            <?php //$phone = lovingair_get_phone_number(); ?>
                            <?php $phone = get_field('phone', 'option'); ?>
                            <p class="header__phone"><a href="tel:<?php echo $phone; ?>"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png"> <?php echo $phone ?></a></p>
                        </div>
                    </div>
                    <div class="header__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="header-menu">
                            <?php 
                            wp_nav_menu( array(
                                'theme_location'    =>  'header_menu',
                                'menu_class'        =>  'navbar-nav',
                                'walker'            =>  new Custom_Nav_Walker()
                            ) ); ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
