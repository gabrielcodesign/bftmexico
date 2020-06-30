<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function bft_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), 'v4.5.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/src/global.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/awesomefont/all.min.css', array(), true);
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), 'v4.5.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/src/bft.js', array(), '1.0.0', true);
	wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/js/src/scroll.js', array(), '1.0.0', true);
	wp_enqueue_script('googleapis', get_template_directory_uri() . '/assets/js/jquery/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('fontawesome', get_template_directory_uri() . '/assets/js/awesome/awesome-font.js', array(), '5.13.0', true);
}

add_action( 'wp_enqueue_scripts', 'bft_script_enqueue');

