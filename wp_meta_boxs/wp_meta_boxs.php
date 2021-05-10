<?php 
/*
Plugin Name: wp_meta_boxs
Plugin URI: https://sabziman.com/
Description: Education wp_meta_boxs in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordpress-options-api
*/
define('WO_PLUGIN_DIR',plugin_dir_url(__FILE__));
define('WO_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('WO_PLUGIN_PATH_INC',WO_PLUGIN_PATH."/inc/");
define('WO_PLUGIN_PATH_tpl',WO_PLUGIN_PATH."/tpl/");
function wo_api_register_style() {
    wp_register_style('main-css', WO_PLUGIN_DIR."assets/css/style.css" );
    wp_enqueue_style('main-css');
}
add_action('admin_enqueue_scripts', 'wo_api_register_style' );
if(is_admin()){
    include WO_PLUGIN_PATH_INC."admin/menus.php";
    include WO_PLUGIN_PATH_INC."admin/metaboxes.php";


}