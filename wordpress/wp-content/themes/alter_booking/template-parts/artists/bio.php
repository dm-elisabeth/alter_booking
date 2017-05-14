<div class="artist__bio">
  <?php $bio_german = get_field('biography_german'); if( !empty($bio_german) ): ?>
    <div class="german">
      <h3>Biografie</h3>
      <?php echo $bio_german; ?>
    </div>
  <?php endif; ?>
  <?php $bio_english = get_field('biography_english'); if( !empty($bio_english) ): ?>
    <div class="english">
      <h3>Biography</h3>
      <?php echo $bio_english; ?>
    </div>
  <?php endif; ?>
</div><!-- .artist__bio -->
