<?php

/**
 * Theme text domain constant
 */
if ( ! defined( 'CUSTOM_THEME_TEXT_DOMAIN' ) ) {
    define( 'CUSTOM_THEME_TEXT_DOMAIN', 'custom-theme' );
}

add_theme_support( "title-tag" );
add_theme_support( "responsive-embeds" );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// includes js file based on page type
require get_template_directory() . '/inc/functions/js_scripts.php';

// includes css file based on page type
require get_template_directory() . '/inc/functions/css_pagetype.php';

// media and image support
 require get_template_directory() . '/inc/functions/theme_media.php';
 
 // custom post types and taxonomies
require get_template_directory() . '/inc/functions/custom_post_types.php';

// customization
// require get_template_directory() . '/inc/functions/query_vars.php';

//shortcodes
// require get_template_directory() . '/inc/shortcodes/shco_content_embed.php';

// custom post types
// require get_template_directory() . '/inc/functions/custom_post_types.php';

// utilities
// require get_template_directory() . '/inc/functions/util_images.php';

// add_filter('query_vars', 'registering_custom_query_var');
// function registering_custom_query_var($query_vars)
// {
//     $query_vars[] = 'designs'; // Change it to your desired name
//     return $query_vars;
// }

//flush_rewrite_rules();