<?php $image = get_field('image');
      $size = 'artist-detail';
      $picture = $image['sizes'][ $size ];
if( !empty($image) ): ?>
  <img src="<?php echo $picture ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
