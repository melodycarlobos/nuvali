<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title>Nuvali | <?php wp_title(''); ?></title>

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

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
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
		<div id="container" class="header-wrapper">

			<header class="header" role="banner">

		
				<div class="logo">
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<a href="<?php echo home_url(); ?>" rel="nofollow" ><?php bloginfo('http://localhost/wordpress/wp-content/uploads/logo.png'); ?></a>
					<a href=""><img src="http://localhost/nuvali/wp-content/uploads/logo.png"></a>
				</div>

			<div class="social-network">
				<input type="text" size="22" class="search">
				<a href="#"><img src="http://localhost/nuvali/wp-content/uploads/twitter.png" width="27px" height="27px"></a>
				<a href="#"><img src="http://localhost/nuvali/wp-content/uploads/youtube.png" width="27px" height="27px"></a>
				<div class="fb-like" data-send="false" data-width="15"></div>
			</div>

					<nav role="navigation"  class="main-nav">
						<?php bones_main_nav(); ?>
					</nav>
			<div class="signup"><a href="#">Sign Up</a></div>

			</header> <!-- end header -->
		</div>