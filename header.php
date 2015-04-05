<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Polyanthus
 */
?><!DOCTYPE html>

<!-- HTML5 Reset: https://github.com/murtaugh/HTML5-Reset - Free to use -->
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]--><!-- the "no-js" class is for Modernizr. -->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title>Polyanthus - Let a little life in</title>
	<meta name="title" content="Polyanthus" />
	<meta name="author" content="Anni Davenport" />
	<meta name="description" content="Polyanthus - Let a little life in" />

	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />

	<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="Anni Davenport" />

	<!--  Mobile Viewport
	http://j.mp/mobileviewport & http://davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width (wrong for most sites)
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/reset.css" />
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" /> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/type.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/skeleton.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive-nav.css" />
	<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Sanchez|EB+Garamond|Rokkitt' rel='stylesheet' type='text/css'>
	<!-- Lea Verou's Prefix Free, lets you use un-prefixed properties in your CSS files -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/prefixfree.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/responsive-nav.js"></script>

	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/modernizr-2.7.1.dev.js"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/imagesloaded.pkgd.js"></script>

	<script type="text/javascript">

		// initialize Masonry
		var msnry = new Masonry( container );
		// layout Masonry again after all images have loaded
		imagesLoaded( container, function() {
		  msnry.layout();
		});

	</script>


<?php wp_head(); ?>
</head>
<!--
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'polyanthus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'polyanthus' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation
	</header><!-- #masthead

	<div id="content" class="site-content">
-->


<body>

<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

	<header>
		<div class="top-bar">
			<div class="search">

				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				    <div>
				        <input type="text" size="10" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
				        <input type="image" id="searchsubmit" value="Search" class="button" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/search.png" />
				    </div>
				</form>
			</div>
<!-- 			<div id="custom-toggle"><a href="Derpy" id="Derpyola">Derp</a></div>-->
<!-- 			<a aria-hidden="false" class="nav-toggle active" href="#">Menu</a> -->
			<nav class="nav-collapse">

				<ul>
					<li><a href="<?php echo site_url(); ?>/" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/' ? ' active' : '');?>">Home</a></li>
					<li><a href="<?php echo site_url(); ?>/about" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/about/' ? ' active' : '');?>">About</a></li>
					<li><a href="<?php echo site_url(); ?>/shop" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/shop/' ? ' active' : '');?>">Shop</a></li>
					<li><a href="<?php echo site_url(); ?>/blog" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/blog/' ? ' active' : '');?>">Blog</a></li>
					<li><a href="<?php echo site_url(); ?>/faq-support" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/faq-support/' ? ' active' : '');?>">FAQ &amp; Support</a></li>
					<li><a href="<?php echo site_url(); ?>/contact" class="<?php echo ($_SERVER['REQUEST_URI'] == '/DIG351/contact/' ? ' active' : '');?>">Contact</a></li>

				</ul>
				<!--<h3>request URI: <?php echo ($_SERVER['DOCUMENT_ROOT']) ?><?php echo ($_SERVER['REQUEST_URI']) ?><br/>ABSPATH URL: <?php echo ABSPATH; ?></h3>-->
			</nav>
			<div class="cart">
				<a href="<?php $shoppingCart = TheCartPress::getShoppingCart(); print( tcp_get_the_shopping_cart_url()); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cart.png" alt="Cart">
				</a>
				<p>(<?php $shoppingCart = TheCartPress::getShoppingCart();
					printf( '<a href="%s">%s</a>',
					tcp_get_the_shopping_cart_url(), $shoppingCart->getCount()  ); ?>)
				</p>
			</div>

		</div>
		<div id="logo">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Polyanthus"></a>
		</div>
	</header>