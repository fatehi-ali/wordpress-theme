<?php 
/*
Plugin Name: wordpress-apis
Plugin URI: https://sabziman.com/
Description: Education wordpress-apis in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordpress-apis
*/
define('WA_PLUGIN_DIR',plugin_dir_url(__FILE__));
define('WA_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('WA_PLUGIN_PATH_INC',WA_PLUGIN_PATH."/inc/");
define('WA_PLUGIN_PATH_tpl',WA_PLUGIN_PATH."/tpl/");

if(is_admin()){
    include WA_PLUGIN_PATH_INC."admin/menus.php";
}