<?php /* Template Name: artists_page */ ?>

<?php
/**
 * The template for displaying artist detail pages
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">

		<div class="artist__header">
		  <?php get_template_part( 'template-parts/artists/header', 'none' ); ?>
		</div><!-- .artist__header -->

		<main id="main" class="artist" role="main">
		  <?php get_template_part( 'template-parts/artists/picture', 'none' ); ?>

		  <div class="artist__info">
		    <?php get_template_part( 'template-parts/artists/bio', 'none' ); ?>

		    <?php get_template_part( 'template-parts/artists/press', 'none' ); ?>

				<?php get_template_part( 'template-parts/artists/bandmembers', 'none' ); ?>

		    <?php get_template_part( 'template-parts/artists/refs', 'none' ); ?>

				<?php get_template_part( 'template-parts/artists/products', 'none' ); ?>

		  </div><!-- .artist__info -->

		  <div class="artist__social">
				<?php get_template_part( 'template-parts/artists/media', 'none' ); ?>

				<?php get_template_part( 'template-parts/artists/social', 'none' ); ?>

				<?php get_template_part( 'template-parts/artists/downloads', 'none' ); ?>
		  </div><!-- .artist__social -->
		  <div class="artist__clearfix"></div>
		</main><!-- #main -->

	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
