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

	<header id="header" role="banner" class="large">
		<div class="header__content">
			<!-- logo -->
			<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>

			<!-- fixed custom top navigation -->
			<div class="header__menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mainNav' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'language-menu', 'container_class' => 'langSwitch' ) ); ?>
			</div>
		</div><!-- .header__content -->
	</header><!-- #fixedHeader -->
	<div class="header__spacer"></div>
		<div id="content">
