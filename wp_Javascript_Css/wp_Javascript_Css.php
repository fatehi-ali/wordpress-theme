<?php 
/*
Plugin Name: Manage Javascript & Css Files
Plugin URI: https://sabziman.com/
Description: Education Manage Javascript & Css Files in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: Manage Javascript & Css Files
*/
define('WO_PLUGIN_DIR',plugin_dir_url(__FILE__));
define('WO_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('WO_PLUGIN_PATH_INC',WO_PLUGIN_PATH."/inc/");
define('WO_PLUGIN_PATH_tpl',WO_PLUGIN_PATH."/tpl/");

function wo_api_register_css_js_front() {
    //css
    wp_register_style('main-css-front', WO_PLUGIN_DIR."assets/css/style.css" );
    wp_enqueue_style('main-css-front');
    // js 
    wp_register_script('main-js-front', WO_PLUGIN_DIR."assets/js/js_main.js",['jquery'] );
    wp_enqueue_script('main-js-front');
}
add_action('wp_enqueue_scripts', 'wo_api_register_css_js_front' );  //front

function wo_api_register_css_js_admin() {
    //css
    wp_register_style('main-css-admin', WO_PLUGIN_DIR."assets/css/style.css" );
    wp_enqueue_style('main-css-admin');
    // js
    wp_register_script('main-js-admin', WO_PLUGIN_DIR."assets/js/js_main.js",['jquery'] );
    wp_enqueue_script('main-js-admin');
}
add_action('admin_enqueue_scripts', 'wo_api_register_css_js_admin' );  //admin