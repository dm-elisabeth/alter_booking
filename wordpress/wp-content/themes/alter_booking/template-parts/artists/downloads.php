<?php
    // vars
    $tech_rider = get_field('tech_rider');
    $presskit = get_field('presskit');
    $presspictures = get_field('presspictures');
    ?>
<div class="artist__downloads">
  <?php if($tech_rider OR $presskit OR $presspictures) {
    echo "<h3>Downloads</h3>";
  } ?>
  <?php if( $tech_rider ): ?>
    <a target="_blank" href="<?php echo $tech_rider; ?>" class="artist__link musszo-icons__file-text2">
      technical rider
    </a>
  <?php endif; ?>
  <?php if( $presskit ): ?>
    <a target="_blank" href="<?php echo $presskit; ?>" class="artist__link musszo-icons__files-empty">
      presskit
    </a>
  <?php endif; ?>
  <?php if( $presspictures ): ?>
    <a target="_blank" href="<?php echo $presspictures; ?>" class="artist__link musszo-icons__file-picture">
      press pictures
    </a>
  <?php endif; ?>
</div>
