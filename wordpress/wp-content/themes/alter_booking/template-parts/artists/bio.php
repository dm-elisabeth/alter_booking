<div class="artist__bio">
  <?php if( have_rows('biography') ): ?>
    <div class="artist__bio">
      <?php while( have_rows('biography') ): the_row();
        // vars
        $bio_german = get_sub_field('bio_german');
        $bio_english = get_sub_field('bio_english');
        ?>
        <div class="german">
          <?php echo $bio_german; ?>
        </div>
        <div class="english">
          <?php echo $bio_english; ?>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div><!-- .artist__bio -->
