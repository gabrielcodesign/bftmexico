<?php
/*
	==========================================
	 Read More
	==========================================
*/

/**
 * Adds a custom "Read more" link to post excerpts.
 * Replaces "[...]" (appended to automatically generated excerpts) with "... Read more" and it links to the article.
 */
function excerpt_read_more_link($output) {
    global $post;
    $text = 'Read more';
    if ( $post->post_type == 'posts' )  // change MY-CUSTOM-POST-TYPE to your real CPT name
        $text = 'Get it now';
    return $output . '<a class="more-link" href="'. get_permalink($post->ID) . '">'. $text .'</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');