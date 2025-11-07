<?php

// add post thumbnail support
add_theme_support( 'post-thumbnails' );

// custom image sizes
// add_image_size( "custom-image", 250, 250, true );

// add custom images sizes to block dropdown
//if ( !function_exists( "custom_image_sizes" ) ) :
//function custom_image_sizes( $sizes ) {
//    return array_merge( $sizes, array(
//            'custom-image' => __( 'Custom Image' ),
//        )
//    );
//}
//endif;
//add_filter( 'image_size_names_choose','custom_image_sizes' );