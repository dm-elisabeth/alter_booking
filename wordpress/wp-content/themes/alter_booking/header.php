<?php
/**
 * alter-booking header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

	<header id="header" role="banner">
		<div class="header__content large">
			<!-- logo -->
			<a id="logo" href="/">
			<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
			</a>
			<!-- <div id="logo">
				Musszo
			</div> -->
			<!-- fixed custom top navigation -->
			<!-- <div class="mobileMenu">
				<div class="icon"></div>
			</div> -->
			<div class="header__menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mainNav' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'language-menu', 'container_class' => 'langSwitch' ) ); ?>
			</div>
		</div><!-- .header__content -->
	</header><!-- #fixedHeader -->
		<div id="content">
