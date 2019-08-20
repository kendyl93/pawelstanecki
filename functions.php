<?php /**
 * Enqueue scripts and styles
 */
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR_PATH', get_template_directory());

function _tk_scripts() {

	// Import the necessary CSS
	wp_enqueue_style( '_tk-default-wp', THEME_DIR_URI . '/includes/css/default.css' );

    wp_enqueue_style( '_tk-layout-wp', THEME_DIR_URI . '/includes/css/layout.css' );
    
    wp_enqueue_style( '_tk-fonts-wp', THEME_DIR_URI . '/includes/css/fonts.css' );
        
    wp_enqueue_style( '_tk-magnific-popup-wp', THEME_DIR_URI . '/includes/css/magnific-popup.css' );
            
    wp_enqueue_style( '_tk-media-queries-wp', THEME_DIR_URI . '/includes/css/media-queries.css' );

    // import the necessary JS
    wp_enqueue_script( 'jquery', THEME_DIR_URI . '/includes/js/jquery-migrate-1.2.1.min.js', array(), '', true );
    
    wp_enqueue_script( 'flexslider', THEME_DIR_URI . '/includes/js/jquery.flexslider.js', array(), '', true );
    
    wp_enqueue_script( 'waypoints', THEME_DIR_URI . '/includes/js/waypoints.js', array(), '', true );
    
    wp_enqueue_script( 'fittext', THEME_DIR_URI . '/includes/js/jquery.fittext.js', array(), '', true );
    
    wp_enqueue_script( 'magnific-popup', THEME_DIR_URI . '/includes/js/magnific-popup.js', array(), '', true );
        
    wp_enqueue_script( 'init', THEME_DIR_URI . '/includes/js/init.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' ); ?>