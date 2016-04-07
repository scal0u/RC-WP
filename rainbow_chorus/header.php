<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

    <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    <link data-require="font-awesome@*" data-semver="4.5.0" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utilities.css" />
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory(); ?>/style.css" /> -->
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- 	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<section id="branding">
				<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</section>
			<nav id="menu" role="navigation">
				<div id="search">
					<?php get_search_form(); ?>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		<div id="container">
 -->

	<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { ?>

	    <div class="jumbotron text-center noMarginBottom">

	        <div class="rainbow_cache rainBlue"></div>

	        <div class="container">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo" alt="Rainbow Chorus Logo">
	            <a class="menuIcon"><i class="fa fa-bars fa-2x"></i></a>
	            <div class="bottom">
	                <h1>Strength in Harmony</h1>
	                <p class="lead">The Rainbow Chorus is Brighton & Hove’s only non-audition LGBT choir, and the only one in the South outside of London.</p>
	                <p>
	                    <a class="btn btn-primary btn-lg"> <i class="fa fa-sign-in"></i> Join us</a>
	                    <a class="btn btn-secondary btn-lg"> <i class="fa fa-music"></i> Hear us sing</a>
	                </p>
	                <p class="social">
	                    <a><i class="fa fa-facebook fa-lg"></i></a>
	                    <a><i class="fa fa-twitter fa-lg"></i></a>
                        <a><i class="fa fa-youtube fa-lg"></i></a>
	                    <a><i class="fa fa-instagram fa-lg"></i></a>
	                </p>
	            </div>
	        </div>

	    </div>

	<? } ?>

    <div class="container">

        <div class="row menu_balls">
            <div class="col-xs-4 col-sm-2">
                <a href="/about-us">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/about.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="/performances">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/join.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="/join-us">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/perfs.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="/press">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/press.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="http://www.brownpapertickets.com/event/2386279">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/tickets.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="/join-us/volunteer">                
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu/volunteer.png" alt="" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="row">