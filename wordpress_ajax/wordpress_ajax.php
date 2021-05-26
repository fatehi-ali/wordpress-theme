<?php 
/*
Plugin Name: wordpress_wordpress_ajax
Plugin URI: https://sabziman.com/
Description: Education ajax in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordpress_wordpress_ajax
*/
define('WO_PLUGIN_DIR',plugin_dir_url(__FILE__));
define('WO_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('WO_PLUGIN_PATH_INC',WO_PLUGIN_PATH."/inc/");
define('WO_PLUGIN_PATH_tpl',WO_PLUGIN_PATH."/tpl/");
define('WO_PLUGIN_INC_URL',WO_PLUGIN_DIR."/inc/");
function wo_api_register_style() {
    wp_register_style('main-css', WO_PLUGIN_DIR."assets/css/style.css" );
    wp_enqueue_style('main-css');
    
    wp_register_script('main-js', WO_PLUGIN_DIR."assets/js/wp-ajax.js",['jquery']);
    wp_enqueue_script('main-js');
}
add_action('admin_enqueue_scripts', 'wo_api_register_style' );

if(is_admin()){
    include WO_PLUGIN_PATH_INC."admin/menus.php";
    include WO_PLUGIN_PATH_INC."admin/metaboxes.php";
    
}
include WO_PLUGIN_PATH_INC."ajax.php";
