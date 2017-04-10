<?php
    // vars
    $tech_rider = get_field('tech_rider');
    $presskit = get_field('presskit');
    $presspictures = get_field('presspictures');
    ?>
<div id="artist__downloads">
  <?php if( $tech_rider ): ?>
    <a target="_blank" href="<?php echo $tech_rider; ?>">
      technical rider
    </a>
  <?php endif; ?>
  <?php if( $presskit ): ?>
    <a target="_blank" href="<?php echo $presskit; ?>">
      presskit
    </a>
  <?php endif; ?>
  <?php if( $presspictures ): ?>
    <a target="_blank" href="<?php echo $presspictures; ?>">
      press pictures
    </a>
  <?php endif; ?>
</div>
