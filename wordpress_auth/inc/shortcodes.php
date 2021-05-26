<?php
function wp_auth_login_handler($atts,$content=null){
   $wp_auth_options=get_option('wp_auth_options',[]);
   if($wp_auth_options['is_login_active'])
   {
    include WP_AUTH_PATH_TPL.'front/login.php';
   }
   else{
   echo '<div class="title">در حال بروزرسانی هستیم بعدا امتحان کنید</div>';
   }
}
function wp_auth_register_handler($atts,$content=null){
    $wp_auth_options=get_option('wp_auth_options',[]);
    if($wp_auth_options['is_register_active'])
   {
    include WP_AUTH_PATH_TPL.'front/register.php';
   }
   else{
    echo '<div class="title">در حال بروزرسانی هستیم بعدا امتحان کنید</div>';
    }

}
add_shortcode('wp_auth_login','wp_auth_login_handler');
add_shortcode('wp_auth_register','wp_auth_register_handler');
