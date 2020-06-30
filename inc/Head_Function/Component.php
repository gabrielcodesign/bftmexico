<?php
/*
	==========================================
	 Head function
	==========================================
*/

function bft_remove_version() {
	return '';
}
add_filter('the_generator','bft_remove_version');