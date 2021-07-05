<?php
define('EXP_PATH',get_template_directory().'/');
define('EXP_URL',get_template_directory_uri().'/');
add_action('after_setup_theme','action_after_setup_theme' );

/**
 * Fires after the theme is loaded.
 *
 */
function action_after_setup_theme(){
 add_theme_support('post-thumbnails');
 add_theme_support('custom-logo');
 add_theme_support('title-tag');
 add_theme_support( 'post-formats', array( 'aside', 'gallery','video','audio','image') );
 add_filter('show_admin_bar','__return_false');
 register_nav_menu('logged-in-menu','logged-in-menu');
 register_nav_menu('logged-out-menu','logged-out-menu');
 register_nav_menu('main-menu','main-menu');
 add_image_size( 'custom-size', 220, 180, true );
}
include EXP_PATH.'includes/admin/post-type.php';
include EXP_PATH.'includes/widget.php';
include EXP_PATH.'includes/sidebar.php';
if(is_admin()){
    include EXP_PATH.'includes/admin/menu-admin.php';
}