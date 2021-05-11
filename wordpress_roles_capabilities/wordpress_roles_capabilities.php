<?php 
/*
Plugin Name: wordpress_roles_capabilities
Plugin URI: https://sabziman.com/
Description: Education wordpress_roles_capabilities in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordpress_roles_capabilities
*/
define('WO_PLUGIN_DIR',plugin_dir_url(__FILE__));
define('WO_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('WO_PLUGIN_PATH_INC',WO_PLUGIN_PATH."/inc/");
define('WO_PLUGIN_PATH_tpl',WO_PLUGIN_PATH."/tpl/");
function Simple_Plugin_Actiation()
{
//   remove_role('custom-role');
    add_role(
        'custom-role',
        'نقش سفارشی',
         array(
            'read' => true,
            'edit_posts' => true,
            'switch_themes' =>true,
            'install_themes' =>true,
            'new_cap' => true
         )
         );
         $role=get_role('custom-role');
         $role->add_cap('new_cap');
 }

function Simple_Plugin_Deactiation(){

}

register_activation_hook(__FILE__,'Simple_Plugin_Actiation' );
register_deactivation_hook(__FILE__,'Simple_Plugin_Deactiation' );

function wo_api_register_style() {
    wp_register_style('main-css', WO_PLUGIN_DIR."assets/css/style.css" );
    wp_enqueue_style('main-css');
}
add_action('admin_enqueue_scripts', 'wo_api_register_style' );

if(is_admin()){
    include WO_PLUGIN_PATH_INC."admin/menus.php";
    include WO_PLUGIN_PATH_INC."admin/metaboxes.php";
}