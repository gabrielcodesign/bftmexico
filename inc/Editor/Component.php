<?php
/**
 * bft\editor
 *
 * Register support for Gutenberg wide images in your theme
 */
function bft_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'bft_setup' );