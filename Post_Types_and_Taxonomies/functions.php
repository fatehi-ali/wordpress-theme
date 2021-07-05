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
}
include EXP_PATH.'includes/admin/post-type.php';