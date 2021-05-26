<?php
function wp_auth_admin_setting(){
    add_menu_page(
    'ورود یا ثبت نام',
    'ورود یا ثبت نام',
    'manage_options',
    'wp_auth_admin_setting',
    'wp_auth_admin_setting_handler'
    );
}

function wp_auth_admin_setting_handler(){
   $wp_auth_options=get_option( 'wp_auth_options', [] );
   if(isset($_POST['submit'])){
       $wp_auth_options['is_login_active']=isset($_POST['is_login_active']);
       $wp_auth_options['is_register_active']=isset($_POST['is_register_active']);
       $wp_auth_options['login_form_title']=sanitize_text_field($_POST['login_form_title']);
       $wp_auth_options['register_form_title']=sanitize_text_field($_POST['register_form_title']);
       update_option('wp_auth_options',$wp_auth_options);
   }
   include WP_AUTH_PATH_TPL.'admin/setting.php';
}
add_action('admin_menu','wp_auth_admin_setting');