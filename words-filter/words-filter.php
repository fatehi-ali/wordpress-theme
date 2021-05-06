<?php 
/*
Plugin Name: words-filter
Plugin URI: https://sabziman.com/
Description: یک افزونه ساده برای فیلتر سازی کلمات در وردپرس 
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: wordsfilter
*/
define('WF_PLUGIN_DIR',plugin_dir_url(__FILE__));
//http://localhost/sabziman/wp-content/plugins/SimplePlugin/

define('WF_PLUGIN_PATH',plugin_dir_path(__FILE__));
//C:\xampp\htdocs\sabziman\wp-content\plugins\SimplePlugin/

define('WF_PLUGIN_INC_DIR',WF_PLUGIN_DIR."/inc/");
define('WF_PLUGIN_INC_PATH',WF_PLUGIN_PATH."/inc/");

function wf_filter_words($content){
    $word='وردپرس';
    $replace='<a href="https://github.com/fatehi-ali/wordpress-theme"> wp </a>';
    $content =preg_replace("/{$word}/",$replace,$content);
    return $content;
    
}
add_filter('the_content','wf_filter_words');