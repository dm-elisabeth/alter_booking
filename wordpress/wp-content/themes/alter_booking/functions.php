<?php
  function register_menus() {
   register_nav_menus(
  	 array(
  		 'main-menu' => __( 'Main Menu' ),
  		 'partner-menu' => __( 'Partner Menu' ),
       'artists-menu' => __( 'Artists Menu' ),
  		 'social-menu' => __( 'Social Menu' ),
  		 'contact-menu' => __( 'Contact Menu' ),
  		 'language-menu' => __( 'Language Menu' ),
  		 'legal-menu' => __( 'Legal Menu' )
  	 )
   );
  }
  add_action( 'init', 'register_menus' );

  /**
   * Proper way to enqueue scripts and styles
   */
  function musszo_externals() {
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/main.css',false,'1.1','all');
    wp_enqueue_style( 'basic-style', get_stylesheet_uri() );
    wp_enqueue_script( 'main', get_theme_file_uri( '/assets/js/main.js' ), false, '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'musszo_externals' );

  function raleway_font_url() {
      $fonts_url = '';
      $raleway = _x( 'on', 'Raleway font: on or off', 'yourthemename' );

      if ( 'off' !== $raleway ) {
          $font_families = array();

          if ( 'off' !== $raleway ) {
              $font_families[] = 'Raleway:400,400i,600,600i';
          }

          $query_args = array(
              'family' => urlencode( implode( '|', $font_families ) ),
              'subset' => urlencode( 'latin,latin-ext' ),
          );

          $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
      }

      return esc_url_raw( $fonts_url );
  }

  function raleway_scripts_styles() {
    wp_enqueue_style( 'raleway-fonts', raleway_font_url(), array(), null );
  }
  add_action( 'wp_enqueue_scripts', 'raleway_scripts_styles' );

  function wpb_list_child_pages() {
  	global $post;
  	if ( is_page() && $post->post_parent )
  		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
  	else
  		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
  	if ( $childpages ) {
  		$string = '<ul>' . $childpages . '</ul>';
  	}
  	return $string;
  	}
  add_shortcode('wpb_childpages', 'wpb_list_child_pages');

  add_image_size( 'artist-ov', 880, 600, true );
  add_image_size( 'artist-detail', 1400, 700, true );
?>
