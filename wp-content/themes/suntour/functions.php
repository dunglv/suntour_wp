<?php

// Hide admin bar
show_admin_bar(false);
load_theme_textdomain('suntour',  get_template_directory(). '/languages');
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
    return 15;
}
add_filter( 'excerpt_length', 'featured_excerpt_length' );

// Featured Images & Post Thumbnails
add_theme_support( 'post-thumbnails' );

add_filter( 'nav_menu_link_attributes', 'cfw_add_data_atts_to_nav', 10, 4 );
    function cfw_add_data_atts_to_nav( $atts, $item, $args ) {

    $atts['data-hover'] = __($item->title);
    return $atts;
}


function wpb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

// add css js slider smart
function add_smart_front_script()
{
    wp_register_style( 'normalize', get_template_directory_uri()  .'/css/smart/normalize.min.css' );
    wp_register_style( 'n2-ss-1', get_template_directory_uri()  .'/css/smart/n2-ss-1.css' );
    wp_register_style( 'responsive', get_template_directory_uri()  .'/css/responsive.css' );
    wp_enqueue_style( 'normalize');
    wp_enqueue_style( 'n2-ss-1');
    wp_enqueue_style( 'responsive');

    wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/scroll-effect.min.js');
    wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/n2.js');
    wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/nextend-frontend.min.js');
    wp_enqueue_script( 'script5', get_template_directory_uri() . '/js/smartslider-frontend.min.js');
    wp_enqueue_script( 'script6', get_template_directory_uri() . '/js/smartslider-simple-type-frontend.min.js');
    wp_enqueue_script( 'script4', get_template_directory_uri() . '/js/nextend-webfontloader.min.js');
    wp_enqueue_script( 'script3', get_template_directory_uri() . '/js/n2-ss-1.js');
}
add_action( 'wp_enqueue_scripts', 'add_smart_front_script');


function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/style-login-2.css" />';
}
add_action('login_head', 'my_custom_login');