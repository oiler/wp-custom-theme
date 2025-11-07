<?php
if ( !function_exists ( "custom_theme_js_global" ) ) :
function custom_theme_js_global() {
    // Feature detects: loads in header
    //wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', null, null, false );
    // jquery

    // Main scripts: loads in footer
    // wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/app.js', null, null, true );
}
add_action('wp_enqueue_scripts', 'custom_theme_js_global');
endif;