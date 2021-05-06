<?php 
/*
Plugin Name: shortcodes
Plugin URI: https://sabziman.com/
Description: Education shortcodes in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: shortcodes
*/
define('PLUGIN_DIR',plugin_dir_url(__FILE__));

define('PLUGIN_PATH',plugin_dir_path(__FILE__));

add_shortcode('color','change_color');

function change_color($attr,$content){
    $color=$attr['color'];
    return  "<span style='color: {$color};background:blue;padding:5px 3px;border-radius:5px;'>".$content."</span>" ;
 }


 add_shortcode('form','form_creat');

 function form_creat(){
   include PLUGIN_PATH."form.php";
  }


 //do_shortcode('[form]');
 //با استفاده از کد بالا می توان از شورتکد ها هر جایی به جز برگه ها و نوشته استفاده کرد 
