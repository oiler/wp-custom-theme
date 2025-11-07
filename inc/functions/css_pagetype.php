<?php
//global styles
if ( !function_exists ( "custom_theme_css_global" ) ) :
function custom_theme_css_global() {
    $theme_version = wp_get_theme()->get( "Version" );
    wp_enqueue_style( "custom_theme-global", get_template_directory_uri()."/assets/css/styles.css", array(), $theme_version );
}
add_action( "wp_enqueue_scripts", "custom_theme_css_global", 10 );
endif;

//page styles
if ( !function_exists ( "custom_theme_css_by_page_type" ) ) :
function custom_theme_css_by_page_type() {
    $theme_version = wp_get_theme()->get( "Version" );
    if ( is_front_page() || is_page('front-page') ) {
        wp_enqueue_style( "custom_theme-page-front", get_template_directory_uri()."/assets/css/front.css", array(), $theme_version );
    }
}
add_action( "wp_enqueue_scripts", "custom_theme_css_by_page_type", 20 );
endif;
