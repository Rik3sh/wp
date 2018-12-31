<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rikesh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Honest &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo get_site_url(); ?>/wp-content/themes/rikesh/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">

		<div id="head-top" style="position: absolute; width: 100%; top: 0; ">
			<div class="gtco-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div id="gtco-logo"><a href="index.html">Honest <em>.</em></a></div>
						</div>
						<div class="col-md-6 col-xs-6 social-icons">
							<ul class="gtco-social-top">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
			<nav class="gtco-nav sticky-banner" role="navigation">
				<div class="gtco-container">
					
					<div class="row">
						<div class="col-xs-12 text-center menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="services.html">Services</a>
									<ul class="dropdown">
										<li><a href="#">Branding</a></li>
										<li><a href="#">Development</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">Marketing</a></li>
									</ul>
								</li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</nav>
		</div>
