<?php
add_action('admin_menu', 'WO_apis_rigester_menu');
add_action('admin_enqueue_scripts', 'add_media_uploader');
function WO_apis_rigester_menu()
{
    add_menu_page(
        'آپلودر وردپرس',
        'آپلودر وردپرس',
        'manage_options',
        'WordPress_Uploader',
        'WordPress_Uploader_handler'
    );
}
function WordPress_Uploader_handler()
{
    if (isset($_POST['submit_upload'])) {
        $file = $_FILES['namefile'];
        $upload_dir = wp_upload_dir();
        $filepath = $upload_dir['basedir'] . '/my_upload/';
        $fileurl = $upload_dir['baseurl'] . '/my_upload/';
        if(!file_exists($filepath)){
            wp_mkdir_p($filepath);
        }
        $filenamepart = explode('.', $file['name']);
        $newfilename = 'file' . rand(1000, 2000) . '.' . end($filenamepart);
        $newaddresspath = $filepath . $newfilename;
        $newaddressurl = $fileurl . $newfilename;
        move_uploaded_file($file['tmp_name'], "$newaddresspath");
    }
    include EXP_PATH . 'template/admin/menus.php';
}
function add_media_uploader()
{
    wp_enqueue_media();
    wp_enqueue_script('media_uploader_js', EXP_URL . 'assets/js/admin.js', ['jquery'], false, true);
    wp_enqueue_style('media_uploader_css', EXP_URL . 'assets/css/admin.css');
}
