<div class="artist__media">
  <?php if( have_rows('media') ):
    while( have_rows('media') ): the_row();
      $media_item = get_sub_field('media_item');
      $media_type = get_sub_field('media_type');
        if( $media_item ): ?>
          <div class="artist__iframe <?php echo $media_type;?>"><?php echo $media_item;?></div>
        <?php endif;
      endwhile;
    endif; ?>
</div><!-- .artist__press -->
