<div class="artistWrap">
<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );  	foreach( $mypages as $page )
	{
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page 			continue;  		$content = apply_filters( 'the_content', $content );
	?>

		<div class="artistWrap__item">
			<a class="artistWrap__link" href="<?php echo get_page_link( $page->ID ); ?>">
			<div class="artistWrap__thumbnail"><?php echo get_the_post_thumbnail( $page->ID ); ?></div>
			<div class="artistWrap__title"><?php echo $page->post_title; ?></div>
			</a>
		</div>

	<?php }	 ?>
</div><!-- .artistWrap -->
