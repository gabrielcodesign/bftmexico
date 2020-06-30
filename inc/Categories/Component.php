<?php

function yourTheme_category_class($thelist){
  $categories = get_the_category();

  if ( !$categories || is_wp_error($categories) ) {
    return $thelist;
  }

  $output = '<ul class="post-categories-bft">';
  foreach ( $categories as $category ) {
    $output .= '<li class="category-' . $category->slug . '"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
  }
  $output .= '</ul>';

  return $output;
}
add_filter( 'the_category', 'yourTheme_category_class');
