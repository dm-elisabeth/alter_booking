<div class="artist__name"><?php the_title_attribute(); ?></div>
<!-- ARTIST COUNTRIES -->
<div class="artist__meta">
  <?php if( have_rows('country') ): ?>
  <?php while( have_rows('country') ): the_row();
    $single_country = get_sub_field('single_country'); ?>
    <span class="artist__country">
      <?php if( $single_country ): echo $single_country; endif; ?>
    </span>
  <?php endwhile; ?>
<?php endif; ?>
</div>
<!-- ARTIST GENRES -->
<div class="artist__meta">
  <?php if( have_rows('genre') ): ?>
  <?php while( have_rows('genre') ): the_row();
    $single_genre = get_sub_field('single_genre'); ?>
    <span class="artist__genre">
      <?php if( $single_genre ): echo $single_genre; endif; ?>
    </span>
  <?php endwhile; ?>
<?php endif; ?>
</div>
<!-- MUSSZO TASKS -->
<div class="artist__meta">
  <?php if( have_rows('tasks') ): ?>
  <?php while( have_rows('tasks') ): the_row();
    $task = get_sub_field('task'); ?>
    <span class="artist__tasks">
      <?php if( $task ): echo $task; endif; ?>
    </span>
  <?php endwhile; ?>
<?php endif; ?>
</div>
