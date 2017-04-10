<div class="artist__refs">
  <?php if( have_rows('refs') ): ?>
    <?php while( have_rows('refs') ): the_row();
      // vars
      $venue = get_sub_field('venue');
      $venue_link = get_sub_field('venue_link');
      $venue_city = get_sub_field('venue_city');
      ?>
      <div>
        <?php if( $venue_link ): ?>
          <a target="_blank" href="<?php echo $venue_link; ?>">
        <?php endif;
        if( $venue ):
          echo $venue;
        endif;
        if( $venue_link ): ?>
        </a>
        <?php endif; ?>
        <?php if( $venue_city ): ?>
          <?php echo $venue_city; ?>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .artist__refs -->
