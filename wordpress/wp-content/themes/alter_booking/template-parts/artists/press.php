<div class="artist__press">
  <?php if( have_rows('press') ): ?>
    <?php while( have_rows('press') ): the_row();
      // vars
      $quote = get_sub_field('quote');
      $author = get_sub_field('author');
      $medium = get_sub_field('medium');
      $medium_link = get_sub_field('medium_link');
      ?>
      <div class="artist__press">
        <?php if( $quote ): ?>
          <div><?php echo $quote; ?></div>
        <?php endif; ?>
        <?php if( $author ): ?>
          <div><?php echo $author; ?></div>
        <?php endif; ?>
        <?php if( $medium_link ): ?>
          <a target="_blank" href="<?php echo $medium_link; ?>">
        <?php endif; ?>
        <?php if( $medium ): ?>
          <?php echo $medium; ?>
        <?php endif; ?>
        <?php if( $medium_link ): ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .artist__press -->
