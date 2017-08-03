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
    wp_register_style( 'bk', get_template_directory_uri()  .'/css/bk-style.css' );
    wp_register_style( 'responsive', get_template_directory_uri()  .'/css/responsive.css' );
    wp_register_style( 'animate', get_template_directory_uri()  .'/css/animate.css' );

    wp_enqueue_style( 'responsive');
    wp_enqueue_style( 'bk');

    wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/scroll-effect.min.js', true);
}
add_action( 'wp_enqueue_scripts', 'add_smart_front_script');


function my_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/style-login-2.css" />';
}
add_action('login_head', 'my_custom_login');

// Hide Toolbar
function remove_admin_bar_menu( $wp_admin_bar ) {
    if (current_user_can('level_10')) return; // Except Administrator
 
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
}
add_action('admin_bar_menu', 'remove_admin_bar_menu', 70);



// Hide Side Menu
function remove_menus() {
    // if (current_user_can('level_10')) return; // Except Administrator
 
    global $menu;
    unset($menu[2]); // Dashboard
    unset($menu[4]); // Line 1
    // unset($menu[5]); // Posts
    unset($menu[10]); // Media
    unset($menu[20]); // Pages
    unset($menu[25]); // Comments
    unset($menu[59]); // Line 2
    unset($menu[60]); // Appearance
    unset($menu[65]); // Plugins
    // unset($menu[70]); // Profile
    unset($menu[75]); // Tools
    unset($menu[80]); // Settings
    unset($menu[90]); // Line 3
    unset($menu[91]); // Line 3
 
    remove_submenu_page('edit.php?post_type=page', 'post-new.php?post_type=page'); // Pages - Add New
}
add_action('admin_menu', 'remove_menus');

// Remove menu note on top bar
add_action("admin_bar_menu",'remove_update', 999);
function remove_update($wp_admin_bar) {
        $updates_node = $wp_admin_bar->get_node( 'updates' );
        // Check if the 'updates' node exists
        if( $updates_node ) {
            $wp_admin_bar->remove_node( 'updates' );
        }
    }

add_action("admin_bar_menu",'remove_logo', 999);
function remove_logo($wp_admin_bar) {
  $updates_node = $wp_admin_bar->get_node( 'wp-logo' );
  // Check if the 'updates' node exists
  if( $updates_node ) {
      $wp_admin_bar->remove_node( 'wp-logo' );
  }
}

add_action("admin_bar_menu",'remove_comment', 999);
function remove_comment($wp_admin_bar) {
  $updates_node = $wp_admin_bar->get_node( 'comments' );
  // Check if the 'updates' node exists
  if( $updates_node ) {
      $wp_admin_bar->remove_node( 'comments' );
  }
}

// Remove tag meta generator
remove_action('wp_head', 'wp_generator');
remove_action('wp_head','qtranxf_wp_head_meta_generator');

// Hide meta version of wordpress
function hide_wp_version()
{
  return '';
}
add_filter('the_generator', 'hide_wp_version');

function removw_meta_generator()
{
  return '';
}
add_filter('ls_meta_generator', 'removw_meta_generator');


// Add style into admin dashboard
function custom_admin_head() {
  if (current_user_can('level_10')) return; // Except Administrator
 
  echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/inc/admin/admin-style.css" type="text/css" media="all" />';
  echo '<script type="text/javascript" src="'.get_template_directory_uri().'/inc/admin/admin-style.js"></script>';
}
add_action( 'admin_head', 'custom_admin_head', 11 );


/**
 * [Filter wordpress information in panel]
 * @return [none]
 */
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');


/**
 * [custom_admin_footer filter admin information in footer]
 * @return [none]
 */
function custom_admin_footer() {
  if (current_user_can('level_10')) return; // Except Administrator
  echo '';
}
add_filter('admin_footer_text', 'custom_admin_footer');


// Custom Admin footer
function wpexplorer_remove_footer_admin () {
  echo '';
}
add_filter( 'admin_footer_text', 'wpexplorer_remove_footer_admin' );


// Remove update  version footer
function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'my_footer_shh' );

/**
 * [remove_dashboard_widgets remove widgets we dont need]
 * @return [dashboard] [dashbard is available]
 */
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Right Now
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Recent Comments
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // Incoming Links
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // Plugins
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // Activity
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // QuickPress
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // Recent Drafts
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress Blog
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPress Forum
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');



add_action( 'add_meta_boxes', 'm_param_meta_box_add' );
function m_param_meta_box_add() {
    add_meta_box( 'm_param_post', 'Box Title', 'm_param_post_meta_box_cb', 'post', 'normal', 'high' );
}

function m_param_post_meta_box_cb( $post )
{
    $values = get_post_custom( $post->ID );
    if ( isset( $values['m_meta_description'] ) ) {
        $m_meta_description_text = esc_attr( $values['m_meta_description'][0] );
    }
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

?>
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="m_meta_description">Meta Description (max 160)</label></th>
<td><textarea rows="5" cols="100" name="m_meta_description"><?php echo $m_meta_description_text; ?></textarea></td>
</tr>
</table>

<?php
} // close m_param_post_meta_box_cb function

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // Make sure your data is set before trying to save it
    if( isset( $_POST['m_meta_description'] ) ) {
        update_post_meta( $post_id, 'm_meta_description', wp_kses( $_POST['m_meta_description']) );
    }    
}


/**
 * [custom_columns filter columns and remove some unused columns]
 * @param  $columns [description]
 * @return columns after filter
 */
function custom_columns($columns) {
  unset($columns['author']);
  unset($columns['comments']);
  unset($columns['date']);
  return $columns;
}
add_filter( 'manage_pages_columns', 'custom_columns' );


/**
 * [remove_default_post_screen_metaboxes description]
 * @return [post_screen] [customized screen for only admin can edit]
 */
function remove_default_post_screen_metaboxes() {
  if (current_user_can('level_10')) return; // Except Administrator
  remove_meta_box( 'postcustom','post','normal' ); // Custom Fields
  remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt
  remove_meta_box( 'commentstatusdiv','post','normal' ); // Discussion
  remove_meta_box( 'commentsdiv','post','normal' ); // Comments
  remove_meta_box( 'trackbacksdiv','post','normal' ); // Trackback
  remove_meta_box( 'authordiv','post','normal' ); // Author
  remove_meta_box( 'slugdiv','post','normal' ); // Slug
  remove_meta_box( 'revisionsdiv','post','normal' ); // Revision
  remove_meta_box( 'pageparentdiv','page','side' ); // Page Attributes
}
add_action('admin_menu','remove_default_post_screen_metaboxes');


add_action( 'login_redirect', 'pridio_login_redirect');
function pridio_login_redirect(){
  return admin_url('edit.php');;
}