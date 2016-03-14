<?php
/**
 * Child Theme Options Module
 *
 */

if( !function_exists( 'hji_boulevard_child_options' ) ) :
    function hji_boulevard_child_options( $sections ) {
        $fields = array();

        $section = array(
            'icon'    => 'el-icon-home',
            'title'   => __( 'Homepage Parallax', 'hji-textdomain' ),
            'heading' => __( '', 'hji-textdomain' ),
            'desc'    => __( '', 'hji-textdomain' ),
        );

        $fields[] = array(
            'id'       => 'homepage_parallax',
            'title'    => __( 'Homepage Parallax Background', 'hji-textdomain' ),
            'desc'     => __( 'Please select your homepage parallax image.', 'hji-textdomain' ),
            'type'     => 'info'
        );

        $fields[] = array(
            'title'    => __( 'Homepage Parallax Image', 'hji-textdomain' ),
    		'desc'     => __( 'Please select your image', 'hji-textdomain' ),
    		'subtitle' => __( '', 'hji-textdomain' ),
            'id'       => 'home_widget_parallax',
            'compiler' => true,
    		'type'     => 'media',
        );

        $section['fields'] = $fields;

        $sections[] = $section;
        return $sections;
    }
    add_filter( 'redux/options/'. HJI_THEME_OPT_NAME .'/sections', 'hji_boulevard_child_options', 51 );
endif;

/**
 * Adds background images to home parallax section
 */
function hji_home_widget_bg_image( $variables ) {
	global $hji_theme_options;

    if ( isset( $hji_theme_options['home_widget_parallax']['url'] ) && $hji_theme_options['home_widget_parallax']['url'] != '' ) :

	    $background1 = $hji_theme_options['home_widget_parallax']['url'];

        $url = hji_process_relative_url( $background1 );

	    $variables .= '$home_widget_parallax: "'. $url .'";';
    
    endif;

	return $variables;
}
add_filter( 'hji_compiler_after_vars', 'hji_home_widget_bg_image', 99 );
