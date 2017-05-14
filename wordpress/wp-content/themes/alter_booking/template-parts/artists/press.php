<div class="artist__press">
  <?php if( have_rows('press') ):
    echo "<h3><span class='german'>Pressezitate</span><span class='english'>press quotes</span></h3>";
    while( have_rows('press') ): the_row();
      // vars
      $quote = get_sub_field('quote');
      $author = get_sub_field('author');
      $medium = get_sub_field('medium');
      $medium_link = get_sub_field('medium_link');
      ?>
      <div class="press">
        <?php if( $quote ): ?>
          <div class="press__quote"><?php echo $quote; ?></div>
        <?php endif; ?>
        <?php if( $medium_link ): ?>
          <a class="press__link" target="_blank" href="<?php echo $medium_link; ?>">
        <?php endif; ?>
        <?php if( $author ): ?>
          <span class="press__author"><?php echo $author; ?><?php if( $author AND $medium) {
            echo ",";
          } ?></span>
        <?php endif; ?>
        <?php if( $medium ): ?>
          <span class="press__medium"><?php echo $medium; ?></span>
        <?php endif; ?>
        <?php if( $medium_link ): ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .artist__press -->
