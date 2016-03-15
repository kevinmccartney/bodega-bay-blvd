<?php
/**
 * Sets our SCSS constant for the improved build process
 * REQUIRED
 *
 * @since 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) :
    define( 'HJI_BLVD_SCSS', true );
endif;


/**
 * Override main theme widget areas
 */
if ( !function_exists( 'hji_bodega_bay_widgets' ) ) :
    function hji_bodega_bay_widgets() {
        register_sidebar( array(
            'id'            => 'erba-upper-homewidgets',
            'name'          => __( 'Homepage Upper Widgets', 'hji-textdomain' ),
            'description'   => __( 'Homepage Upper Widgets' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        register_sidebar( array(
            'id'            => 'erba-homepage-parallax',
            'name'          => __( 'Homepage Parallax', 'hji-textdomain' ),
            'description'   => __( 'Homepage Parallax Image' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        unregister_sidebar( 'idx-horizontal-search' );
        unregister_sidebar( 'blvd-main-sidebarwidgets' );
        unregister_sidebar( 'blvd-topbar-sidebarwidgets' );
    }
    add_action( 'widgets_init', 'hji_bodega_bay_widgets', 11 );
endif;

/**
 * Put the social links in the header
 */
if ( !function_exists( 'hji_social_header_links' ) ) :
    function hji_social_header_links() {
        global $hji_theme_options;
        $links = hji_social_media_links();
        $output = '<div class="socialmedia-header">' . $links . '</div>';
        echo $output;
    }
endif;

/**
 * Loading in extra fonts
 */
if ( !function_exists( 'hji_bodega_bay_load_fonts' ) ) :
    function hji_bodega_bay_load_fonts() {
        wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,700' );
    }
    add_action( 'wp_enqueue_scripts', 'hji_bodega_bay_load_fonts' );

endif;

/**
 * loading in child theme js
 */
if ( !function_exists( 'hji_bodega_bay_enqueue_scripts' ) ) :
    function hji_bodega_bay_enqueue_scripts() {
        wp_enqueue_script( 'hji_bodega_bay_scripts', get_stylesheet_directory_uri() . '/assets/js/main.js' );
    }
    add_action( 'wp_enqueue_scripts', 'hji_bodega_bay_enqueue_scripts' );
endif;
