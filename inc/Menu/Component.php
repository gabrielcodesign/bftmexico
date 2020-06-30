<?php
/*
	==========================================
	 Activate menus
	==========================================
*/

function bft_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	register_nav_menu('third', 'News and Events');
	
}

add_action('init', 'bft_theme_setup');
