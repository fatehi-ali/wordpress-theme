<?php 
/*
Plugin Name: SimplePlugin
Plugin URI: https://sabziman.com/
Description: a SimplePlugin
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: akismet
*/
define('PLUGIN_DIR',plugin_dir_url(__FILE__));
//http://localhost/sabziman/wp-content/plugins/SimplePlugin/

define('PLUGIN_PATH',plugin_dir_path(__FILE__));
//C:\xampp\htdocs\sabziman\wp-content\plugins\SimplePlugin/

define('PLUGIN_INC_DIR',PLUGIN_DIR."/inc/");
define('PLUGIN_INC_PATH',PLUGIN_PATH."/inc/");


function Simple_Plugin_Actiation(){

}

function Simple_Plugin_Deactiation(){

}

register_activation_hook(__FILE__,'Simple_Plugin_Actiation' );
//زمانی که پلاگین فعال شد کار هایی که در تابع گفته شده را انجام بده 
register_deactivation_hook(__FILE__,'Simple_Plugin_Deactiation' );
//زمانی که پلاگین غیر فعال شد کار هایی که در تابع گفته شده را انجام بده 
if(is_admin()){
    //is_admin یعنی اگر در محیط مدیریت بود این کار ها را انجام بده در محیط مدیریت 
if(file_exists( PLUGIN_DIR . "inc/admin/admin.php"))
{
    include  PLUGIN_DIR . "inc/admin/menus.php";
}
else 
    include  PLUGIN_PATH . "inc/admin/menus.php";
}
else
     include  PLUGIN_INC_PATH . "admin/menus.php";










