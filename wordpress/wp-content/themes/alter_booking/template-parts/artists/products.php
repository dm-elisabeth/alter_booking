<div class="artist__products">
  <?php if( have_rows('product') ): ?>
    <?php while( have_rows('product') ): the_row();
      // vars
      $product_name = get_sub_field('product_name');
      $product_image = get_sub_field('product_image');
      $product_type = get_sub_field('product_type');
      $product_label = get_sub_field('product_label');
      $product_release = get_sub_field('product_release');
      $product_download = get_sub_field('product_download'); // repeater
      ?>
      <div class="product">
        <?php if( $product_image ): ?>
          <div class="product__image">
            <img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>" />
          </div>
        <div class="product__details">
          <?php endif;
          if( $product_name ): ?>
            <div class="product__name"><?php echo $product_name; ?></div>
          <?php endif;
          if( $product_type ): ?>
            <div class="product_type">(<?php echo $product_type; ?>)</div>
          <?php endif;
          if( $product_label ): ?>
            <div class="product_label"><?php echo $product_label; ?><?php if( $product_release ): ?>, <span class="product_release"><?php echo $product_release; ?></span>
              <?php endif; ?></div>
          <?php endif; ?>

          <?php if( have_rows('product_download') ):
            while( have_rows('product_download') ): the_row();
            $product_download_src = get_sub_field('product_download_src');
            $product_download_link = get_sub_field('product_download_link');
              if( $product_download_src ): ?>
                <span class="product__download"><a target="_blank" href="<?php echo $product_download_link; ?>"><?php echo $product_download_src; ?></a></span>
              <?php endif;
            endwhile;
          endif; ?>
        </div>
      </div>
    <?php endwhile;
  endif; ?>
</div><!-- .artist__products -->
