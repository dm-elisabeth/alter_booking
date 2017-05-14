<?php
    // vars
    $homepage = get_field('homepage');
    $facebook = get_field('facebook');
    $twitter = get_field('twitter');
    $vimeo = get_field('vimeo');
    $soundcloud = get_field('soundcloud');
    $youtube = get_field('youtube');
    ?>
<div class="artist__links">
  <?php if($homepage OR $facebook OR $twitter OR $vimeo OR $soundcloud OR $youtube) {
    echo "<h3>Links</h3>";
  } ?>
  <?php if( $homepage ): ?>
    <!--
    homepage
      -->
    <a target="_blank" href="<?php echo $homepage; ?>" class="artist__link musszo-icons__earth">
      homepage
    </a>
  <?php endif; ?>
  <?php if( $facebook ): ?>
    <!--
    facebook
      -->
    <a target="_blank" href="<?php echo $facebook; ?>" class="artist__link musszo-icons__facebook">
      facebook
    </a>
  <?php endif; ?>
  <?php if( $twitter ): ?>
    <!--
    twitter
      -->
    <a target="_blank" href="<?php echo $twitter; ?>" class="artist__link musszo-icons__twitter">
      twitter
    </a>
  <?php endif; ?>
  <?php if( $soundcloud ): ?>
    <!--
    soundcloud
      -->
    <a target="_blank" href="<?php echo $soundcloud; ?>" class="artist__link musszo-icons__soundcloud">
      soundcloud
    </a>
  <?php endif; ?>
  <?php if( $youtube ): ?>
    <!--
    youtube
      -->
    <a target="_blank" href="<?php echo $youtube; ?>" class="artist__link musszo-icons__youtube">
      youtube
    </a>
  <?php endif; ?>
  <?php if( $vimeo ): ?>
    <!--
    vimeo
      -->
    <a target="_blank" href="<?php echo $vimeo; ?>" class="artist__link musszo-icons__vimeo">
      vimeo
    </a>
  <?php endif; ?>
</div>
