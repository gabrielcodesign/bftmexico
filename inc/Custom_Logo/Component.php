<?php
/**
 * bft\Custom_Logo
 *
 *
 */


function bft_custom_logo_setup() {
	$args = array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	);
	add_theme_support( 'custom-logo', $args );
}
   
   add_action( 'after_setup_theme', 'bft_custom_logo_setup' );

/*    Changing Custom Logo Class */

function bft_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'bft-custom-logo-class', $html );
    $html = str_replace( 'custom-logo-link', 'bft-custom-logo-class-what?', $html );

    return $html;
}

add_filter( 'get_custom_logo', 'bft_logo_class' );



