<?php
$action='wp_auth_login';
function wp_auth_do_login(){
   $user_email=sanitize_text_field($_POST['user_Email']);
   $user_password=sanitize_text_field($_POST['user_Password']);
   $validation_result=wp_auth_validate_email_and_password($user_email,$user_password);
   if(!$validation_result['is_valid']){
       wp_send_json([
           'success' => false,
           'message' => $validation_result['message'],
       ],403);
   }
   else{
   $user=wp_authenticate_username_password(null,$user_email,$user_password);
   }
   if(is_wp_error($user)){
    wp_send_json([
        'success' => false,
        'message' =>  'کاربری با این مشخصات در سیستم یافت نشد',
    ],403);
   }
   else{
   $login_resault=wp_signon([
    'user_login'    => $user->user_login,
    'user_password' => $user_password,
    'remember'      => false ,
   ]);
   }

   if(is_wp_error($login_resault)){
    wp_send_json([
        'success' => false,
        'message' =>  'در حال حاضر امکان ورود به سایت وجود ندارد',
    ],403);
   }
   else{
   wp_send_json([
    'success' => true,
    'message' =>  'عملیات ورود با موفقیت انجام شد',
   ],200);
   }

}
function wp_auth_validate_email_and_password($email,$pass){
    $result = [
         'is_valid' => true ,
          'message' => ''   ,
    ];
    if(empty($email)){
        $result['is_valid'] = false ;
        $result['message'] =  'ایمیل نمی تواند خالی باشد';    
        $result['input'] =  'email';    
        return $result;
    }
    if(empty($pass)){
        $result['is_valid'] = false ;
        $result['message'] =  'کلمه عبور نمی تواند خالی باشد'; 
        return $result;   
    }
    if(!is_email($email)){
        $result['is_valid'] = false ;
        $result['message'] = 'ایمیل معتبر نیست';
        return $result;
    }
    return $result;
}

function  wp_auth_do_register(){

    $user_first_name=sanitize_text_field($_POST['user_Firstname']);
    $user_last_name=sanitize_text_field($_POST['user_Lastname']);
    $user_email=sanitize_text_field($_POST['user_Email']);
    $user_password=sanitize_text_field($_POST['user_Password']);
    
    $validation_result=wp_auth_validate_register_form($user_first_name,$user_last_name,$user_email,$user_password);
    if(!$validation_result['is_valid']){
        wp_send_json([
            'success' => false,
            'message' => $validation_result['message'],
        ],400);
    }
    $user_email_parts=explode('@',$user_email);
    $new_user=wp_insert_user([
        'user_login' => apply_filters('pre_user_login',$user_email),
        'user_email' => apply_filters('pre_user_email',$user_email),
        'user_pass'  => apply_filters('pre_user_pass',$user_password),
        'first_name'  => apply_filters('pre_user_first_name',$user_first_name),
        'last_name'  => apply_filters('pre_user_last_name',$user_last_name),
        'display_name'  => apply_filters('pre_user_display_name',"{$user_first_name}  {$user_last_name}"),

    ]);
    if(is_wp_error($new_user)){
        wp_send_json([
           'success' => false ,
           'message' => 'خطایی در ثبت نام شما رخ داده است'
        ],403);
    }
        wp_send_json([
           'success' => true ,
           'message' => 'ثبت نام با موفقیت انجام شد'
        ],200);
   
}
function wp_auth_validate_register_form($first_name,$last_name,$email,$pass){
    $result = [
        'is_valid' => true ,
         'message' => ''   ,
   ];
   if(empty($first_name) || empty($last_name) || empty($email) || empty($pass)  ){
    $result['is_valid'] = false ;
    $result['message'] = 'تمام فیلد ها خالی است ';
    return $result;
   }
   if(!is_email($email)){
    $result['is_valid'] = false ;
    $result['message'] = 'ایمیل معتبر نیست';
    return $result;
   }
   if(email_exists($email)){
    $result['is_valid'] = false ;
    $result['message'] = 'این ایمیل در سیستم موجود است';
    return $result;
   }
   return $result;

}

add_action("wp_ajax_nopriv_{$action}",'wp_auth_do_login');
add_action("wp_ajax_nopriv_wp_auth_register",'wp_auth_do_register');