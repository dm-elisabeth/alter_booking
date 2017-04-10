<?php /* Template Name: artists_overview */ ?>

<?php
/**
 * The template for the artist overview
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				get_template_part( 'template-parts/artists/overview', 'none' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
