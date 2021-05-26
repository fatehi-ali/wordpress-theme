<?php
function wp_auth_load_assets(){

    wp_register_style('wp_auth_style', WP_AUTH_DIR.'assets/css/auth.css');
    wp_enqueue_style('wp_auth_style');

    wp_register_script('wp_auth_script',WP_AUTH_DIR.'assets/js/auth.js',['jquery']);
    wp_enqueue_script('wp_auth_script');

}
add_action('wp_enqueue_scripts','wp_auth_load_assets');
add_action('admin_enqueue_scripts','wp_auth_load_assets');
