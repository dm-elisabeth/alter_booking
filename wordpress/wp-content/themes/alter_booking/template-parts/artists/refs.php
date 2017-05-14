
  <?php if( have_rows('refs') ): ?>
    <div class="artist__refs">
      <h3><span class='german'>Referenzen</span><span class='english'>References</span></h3>
      <?php while( have_rows('refs') ): the_row();
        // vars
        $venue = get_sub_field('venue');
        $venue_link = get_sub_field('venue_link');
        $venue_city = get_sub_field('venue_city');
        ?>
        <div class="ref musszo-icons__location">
          <?php if( $venue_link ): ?>
            <a class="ref_link" target="_blank" href="<?php echo $venue_link; ?>">
          <?php endif;
          if( $venue ):
            echo $venue;
          endif;
          if( $venue_link ): ?>
          </a>
          <?php endif; ?>
          <?php if( $venue_city ): ?>
            - <?php echo $venue_city; ?>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .artist__refs -->
