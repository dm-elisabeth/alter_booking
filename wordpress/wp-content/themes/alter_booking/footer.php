<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="footer" role="contentinfo">
			<div class="footer__content">
				<?php
					$nav_menu = wp_get_nav_menu_object(2);
					wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'container_class' => 'footer__nav',
					'items_wrap' => '<div class="footer__nav__name">'.esc_html($nav_menu->name).'</div><ul id="%1$s" class="%2$s">%3$s</ul>'
				) ); ?>

				<?php
					$nav_menu = wp_get_nav_menu_object(3);
					wp_nav_menu( array(
					'theme_location' => 'partner-menu',
					'container_class' => 'footer__nav',
					'items_wrap' => '<div class="footer__nav__name">'.esc_html($nav_menu->name).'</div><ul id="%1$s" class="%2$s">%3$s</ul>'
				) ); ?>

				<?php
					$nav_menu = wp_get_nav_menu_object(4);
					wp_nav_menu( array(
					'theme_location' => 'social-menu',
					'container_class' => 'footer__nav',
					'items_wrap' => '<div class="footer__nav__name">'.esc_html($nav_menu->name).'</div><ul id="%1$s" class="%2$s">%3$s</ul>'
				) ); ?>

				<?php
					$nav_menu = wp_get_nav_menu_object(5);
					wp_nav_menu( array(
					'theme_location' => 'contact-menu',
					'container_class' => 'footer__nav',
					'items_wrap' => '<div class="footer__nav__name">'.esc_html($nav_menu->name).'</div><ul id="%1$s" class="%2$s">%3$s</ul>'
				) ); ?>
			</div><!-- .footer__content -->
		</footer><!-- #footer -->
		<div class="footer__spacer"></div>
</div><!-- #wrapper -->
<?php wp_footer(); ?>

</body>
</html>
