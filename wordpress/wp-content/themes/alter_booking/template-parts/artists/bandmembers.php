<?php if( have_rows('band_members') ): ?>
  <div class="artist__members">
  <h3><span class='german'>Besetzung</span><span class='english'>Line Up</span></h3>
    <?php while( have_rows('band_members') ): the_row();
      // vars
      $bandmember = get_sub_field('bandmember');
      $bandmember_country = get_sub_field('bandmember_country');
      $instrument = get_sub_field('instrument');
      ?>
      <?php if( $bandmember ): ?>
        <div class="member">
          <div class="member__name">
            <?php echo $bandmember; ?>
            <?php if( $bandmember_country ): ?>
              <span class="member__country">(<?php echo $bandmember_country; ?>)</span>
            <?php endif; ?>
          </div>
          <?php if( have_rows('instrument') ):
            while( have_rows('instrument') ): the_row();
            $instrument_single = get_sub_field('instrument_single');
              if( $instrument_single ): ?>
                  <span class="member__instrument"><?php echo $instrument_single; ?></span>
              <?php endif;
            endwhile;
          endif; ?>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
  </div><!-- .artist__members -->
<?php endif; ?>
