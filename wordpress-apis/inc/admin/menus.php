<?php
add_action('admin_menu','WA_apis_rigester_menu');
function WA_apis_rigester_menu(){
    add_menu_page(
         'تنظیمات پلاکین',
         'تنظیمات پلاکین',
         'manage_options',
         'WA_apis_menu_setting',
         'WA_apis_menu_setting_handler'
        

    );
    add_submenu_page( 
    'WA_apis_menu_setting',
    'عمومی',
    'عمومی',
    'manage_options',
    'WA_apis_setting_general',
    'WA_apis_setting_general_handler'
 );
}
function WA_apis_menu_setting_handler(){
    if(isset($_POST['savesetting']))
    {
        var_dump($_POST);
    }
    include WA_PLUGIN_PATH_tpl."/admin/main.php";
}
function WA_apis_setting_general_handler(){
    include WA_PLUGIN_PATH_tpl."/admin/general.php";

}