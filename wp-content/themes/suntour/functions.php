<?php

// Hide admin bar
show_admin_bar(false);
load_theme_textdomain('suntour');
// Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'language-menu' => __( 'Language Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function featured_excerpt_length( $length ) {
    return 200;
}
add_filter( 'excerpt_length', 'featured_excerpt_length', 999 );

// Featured Images & Post Thumbnails
add_theme_support( 'post-thumbnails' );

add_filter( 'nav_menu_link_attributes', 'cfw_add_data_atts_to_nav', 10, 4 );
    function cfw_add_data_atts_to_nav( $atts, $item, $args ) {

    $atts['data-hover'] = __($item->title);
    return $atts;
}