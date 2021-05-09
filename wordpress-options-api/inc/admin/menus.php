<?php
add_action('admin_menu','WO_apis_rigester_menu');
function WO_apis_rigester_menu(){
    add_menu_page(
         'تنظیمات پلاکین',
         'تنظیمات پلاکین',
         'manage_options',
         'WO_apis_menu_setting',
         'WO_apis_menu_setting_handler'
        

    );
    add_submenu_page( 
    'WO_apis_menu_setting',
    'عمومی',
    'عمومی',
    'manage_options',
    'WO_apis_setting_general',
    'WO_apis_setting_general_handler'
 );
}
function WO_apis_menu_setting_handler(){

    if(isset($_POST['savesetting']))
    {
         //$is_plugin_active=isset($_POST['is_plugin_active']) ? 1 : 0 ;
        // add_option('wp_api_is_active',$is_plugin_active); //فقط اضافه می کند 
       // update_option('wp_api_is_active',$is_plugin_active); //هم اضافه می کند هم اپدیت می کند
      
       if(isset($_POST['is_plugin_active']))
       {
        update_option('wp_api_is_active',1);
       }
       else
       {
         delete_option('wp_api_is_active',0); // حذف اپشن 
       }
    }
    $current_plugin_status=get_option('wp_api_is_active'); //اطلاعات اپشن دریافت می کند
    include WO_PLUGIN_PATH_tpl."/admin/main.php";

}
function WO_apis_setting_general_handler(){
    include WO_PLUGIN_PATH_tpl."/admin/general.php";

}