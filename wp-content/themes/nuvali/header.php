<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php if ( is_front_page()  ) { ?>
			<title>Nuvali | Home </title>
			
		<?php } else  { ?>
			<title>Nuvali | <?php wp_title(''); ?></title>
		<?php }?>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>


<!--  css/js -->

<?php if ( is_front_page()  ) { ?>
   <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/home.css">
<script src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/home.js" type="text/javascript"></script>

<?php } elseif ( is_page('about') ) { ?>
   <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/about.css">
   <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/how_to_get_there.css">
      <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/our_heritage.css">

<?php } elseif ( is_page('whats-nu') ) { ?>
    <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/whats_nu.css">
<script src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/jquery.diyslider.js" type="text/javascript"></script>
<script type="text/javascript" src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/jquery.lightbox-0.5.css" media="screen" />
<script src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/whatsnu.js" type="text/javascript"></script>

<?php } elseif ( is_page('dine-shop') ) { ?>
    <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/dine_and_shop.css">

<?php } elseif ( is_page('invest-in-nuvali') ) { ?>
    <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/investments.css">

<?php } elseif ( is_page('nu-living') ) { ?>
    <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/nu_living.css">
    <script src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/jquery.diyslider.js" type="text/javascript"></script>
<script src="http://localhost/nuvali/wp-content/themes/nuvali/library/js/nu_living.js" type="text/javascript"></script>

<?php } elseif ( is_page('tour') ) { ?>
    <link rel="stylesheet" type="text/css" href="http://localhost/nuvali/wp-content/themes/nuvali/library/css/tour.css">


<?php }?>


		<!-- wordpress head functions -->
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
		<div id="container" >
		<div class="header-wrapper">

			<header class="header" role="banner">

		
				<div class="logo">
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<a href="<?php echo home_url(); ?>" rel="nofollow" ><?php bloginfo('http://localhost/wordpress/wp-content/uploads/logo.png'); ?></a>
					<a href=""><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/logo.png"></a>
				</div>

			<div class="social-network">
				<input type="text" size="22" class="search">
				<a href="#"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/twitter.png" width="27px" height="27px"></a>
				<a href="#"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/youtube.png" width="27px" height="27px"></a>
				<div class="fb-like" data-send="false" data-width="15"></div>
			</div>

					<nav role="navigation"  class="main-nav">
						<?php bones_main_nav(); ?>
					</nav>
			<div class="signup"><a href="#">Sign Up</a></div>

			</header> <!-- end header -->
		</div>
