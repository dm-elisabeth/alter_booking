<?php
    // vars
    $homepage = get_field('homepage');
    $facebook = get_field('facebook');
    $twitter = get_field('twitter');
    $bandcamp = get_field('bandcamp');
    $soundcloud = get_field('soundcloud');
    $youtube = get_field('youtube');
    ?>
<div id="artist__links">
  <?php if( $homepage ): ?>
    <a target="_blank" href="<?php echo $homepage; ?>">
      homepage
    </a>
  <?php endif; ?>
  <?php if( $facebook ): ?>
    <a target="_blank" href="<?php echo $facebook; ?>">
      facebook
    </a>
  <?php endif; ?>
  <?php if( $twitter ): ?>
    <a target="_blank" href="<?php echo $twitter; ?>">
      twitter
    </a>
  <?php endif; ?>
  <?php if( $bandcamp ): ?>
    <a target="_blank" href="<?php echo $bandcamp; ?>">
      bandcamp
    </a>
  <?php endif; ?>
  <?php if( $soundcloud ): ?>
    <a target="_blank" href="<?php echo $soundcloud; ?>">
      soundcloud
    </a>
  <?php endif; ?>
  <?php if( $youtube ): ?>
    <a target="_blank" href="<?php echo $youtube; ?>">
      youtube
    </a>
  <?php endif; ?>
</div>
