<div class="artist__name"><?php the_title_attribute(); ?></div>
  <!-- ARTIST GENRES -->
  <?php if( have_rows('genre') ): ?>
    <div class="artist__meta">
      <?php while( have_rows('genre') ): the_row();
        $single_genre = get_sub_field('single_genre'); ?>
        <span class="artist__genre">
          <?php if( $single_genre ): echo $single_genre; endif; ?>
        </span>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
