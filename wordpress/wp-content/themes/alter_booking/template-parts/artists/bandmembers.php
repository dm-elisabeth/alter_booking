<div class="artist__members">
  <?php if( have_rows('band_members') ): ?>
    <?php while( have_rows('band_members') ): the_row();
      // vars
      $bandmember = get_sub_field('bandmember');
      $bandmember_country = get_sub_field('bandmember_country');
      $instrument = get_sub_field('instrument');
      ?>
      <div class="">
        <?php if( $bandmember ): ?>
          <div><?php echo $bandmember; ?></div>
        <?php endif; ?>
        <?php if( $bandmember_country ): ?>
          <div><?php echo $bandmember_country; ?></div>
        <?php endif; ?>

        <?php if( have_rows('instrument') ):
          while( have_rows('instrument') ): the_row();
          $instrument_single = get_sub_field('instrument_single');
            if( $instrument_single ): ?>
                <?php echo $instrument_single; ?>
            <?php endif;
          endwhile;
        endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .artist__press -->
