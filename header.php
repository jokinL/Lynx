<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>
	<header class="header">
		<div class="header__logo">
			<img src="http://localhost/lynx/wp-content/uploads/2015/03/logo.png" alt="">
		</div><!--//header__logo-->

		<div class="header__mob">
			<div class="header__navbutton">
				<div class="header__navbutton__checkbox" for="checkbox_id">
					<div class="header__navbutton__line"></div>
					<div class="header__navbutton__line"></div>
					<div class="header__navbutton__line"></div>
			    </div>
			</div>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
		</div><!--//header__mob-->

		<div class="header__slogan">
			<h1 class="header__slogan__title">WE’LL HELP <span>MANAGE YOUR BUSINESS</span></h1>
			<p class="header__slogan__description">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
			<a href="#" class="header__slogan__buttom" aria-hidden="true">View more</a>
		</div><!--//header__slogan-->
		<span class="arrow glyphicon glyphicon-chevron-down"></span>
	</header>