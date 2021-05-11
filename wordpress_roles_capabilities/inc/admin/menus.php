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
    'لیست کاربران',
    'لیست کاربران wpdb',
    'manage_options',
    'WO_apis_listuser_wpdb',
    'WO_apis__listuser_wpdb_handler'
    );
    add_submenu_page( 
      'WO_apis_menu_setting',
      ' usermeta  اموزش',
      'اموزش - usermeta  ',
      'manage_options',
      'WO_apis_listuser_usermeta',
      'WO_apis_listuser_usermeta_handler'
    );
}
function WO_apis_menu_setting_handler(){

    // if(current_user_can('read'))
    // {
    //    //اگر کاربر جاری این دسترسی  را داشت این کار ها را انجام بده
    // }

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
    include WO_PLUGIN_PATH_tpl."/admin/menu/main.php";

}
// first submenu general
function WO_apis__listuser_wpdb_handler(){
    global $wpdb;   //متغیری که قبلا تعریف شده
    if(isset($_GET['action']))
    {
      $action=$_GET['action'];
    }
    if(isset($action) && $action== 'delete')
    {
       $item=intval($_GET['item']); 
       if($item>0)
       {
        $wpdb->delete($wpdb->prefix.'listuser',['ID'=>$item]);
       }
    }

    if(isset($action) && $action == 'add')
    { 
        if(isset($_POST['sendinformationuser']))
        {
          $wpdb->insert($wpdb->prefix.'listuser',[
            'firstName' => $_POST['firstname'],
            'lastName' => $_POST['lastname'], 
            'mobile' => $_POST['mobail']
          ]);  
        }
        include WO_PLUGIN_PATH_tpl."admin/menu/adduser-listuser-wpdb.php";
    }

    else
    {
    $listusers=$wpdb->get_results("SELECT * FROM {$wpdb->prefix}listuser");
    include WO_PLUGIN_PATH_tpl."admin/menu/listuser-wpdb.php";
    }

}
//end submenu listuser-wpdb

//first submenu usermeta
  function WO_apis_listuser_usermeta_handler(){
    
       $password=wp_generate_password(10);
       $email="reza@gmail.com"; //ایمیل نباید تکراری باشد وگرنه درج نمی کند 
       $username=explode('@',$email);
       // wp_create_user($username[0], $password, $email);

      $userdata = array(
        'user_login' => $username[0],
        'user_pass' => 1234,
        'user_email' => $email,
      );

      wp_insert_user( $userdata );
      
      wp_update_user(array(
        'ID' => '1',
        'display_name'=>'علی فاتحی'
        ));
     // wp_delete_user(1,2); 
     // این کد می گوید کابر با ایدی 1 را حذف کن و تمامی پست های ان را به کابر با ایدی 2 منتقل کن
    global $wpdb;
    if(isset($_GET['action']))
    {
      $action=$_GET['action'];
    }
    if(isset($action) && $action== 'edit')
    {
       $item=intval($_GET['item']); 
       if($item>0)
       {
        if(isset($_POST['sendinformationuser']))
        {
        $getmobail=$_POST['mobail'];
        $getwallet=$_POST['wallet'];
        update_user_meta($item,'mobail',$getmobail);
        update_user_meta($item,'wallet',$getwallet);
        }
        $mobail=get_user_meta($item,'mobail',true);
        $wallet=get_user_meta($item,'wallet',true);
      }

     include WO_PLUGIN_PATH_tpl."admin/menu/edit-listuser-usermeta.php";
    }
    else
    {
      $listuser=$wpdb->get_results("SELECT ID,user_email,display_name FROM {$wpdb->users}");
      include WO_PLUGIN_PATH_tpl."admin/menu/listuser-usermeta.php";
    }
   
  }
//end submenu usermeta