<?php 
/*
Plugin Name: wordpress_auth
Plugin URI: https://sabziman.com/
Description:  wordpress plugin to manage auth
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordpress_auth
*/
define('WP_AUTH_DIR',plugin_dir_url(__FILE__));
define('WP_AUTH_PATH',plugin_dir_path(__FILE__));
define('WP_AUTH_PATH_INC',WP_AUTH_PATH."/inc/");
define('WP_AUTH_PATH_TPL',WP_AUTH_PATH."/tpl/");
define('WP_AUTH_PATH_ASSETS',WP_AUTH_PATH."/assets/");

include WP_AUTH_PATH_INC.'shortcodes.php';
include WP_AUTH_PATH_INC.'function.php';
include WP_AUTH_PATH_INC.'ajax.php';
if(is_admin()){
    include WP_AUTH_PATH_INC.'admin.php';
}