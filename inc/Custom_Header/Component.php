<?php
/**
 * bft\Custom_Header
 *
 *
 */

add_filter( 'header_video_settings', function( $args ) {
    $args['minWidth']  = 0;
    $args['minHeight'] = 0;
    return $args;
} );
add_theme_support( 'custom-header', array(
    'video' => true,
) );