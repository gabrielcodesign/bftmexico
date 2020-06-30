<?php
/*
	==========================================
	 Custom_Term_Function
	==========================================
*/
function bft_get_terms( $postID, $term) {

	$terms_list = wp_get_post_terms($postID, $term);
    $output = '';
	$i = 0;
	foreach( $terms_list as $term ) { $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}

	return $output;
}