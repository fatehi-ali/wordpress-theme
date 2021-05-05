<?php 
/*
Plugin Name: HookPlugin
Plugin URI: https://sabziman.com/
Description: Education hook in wordpress
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: HookPlugin
*/
function Print_Order_Id($a){
echo $a.'   id  ';
}
function Send_Order_Email(){
print '   email   ';
}
function Send_Order_SMS(){
print '  sms  ';
}
add_action('order_purchase','Print_Order_Id',10,1);
add_action('order_purchase','Send_Order_Email',5);
add_action('order_purchase','Send_Order_SMS',11);

$a='send';
$b='item';
//filters
do_action('order_purchase',$a,$b);

function update_order_price($order_price){
return $order_price * 2 ;  //50000
//در فیلتر ها ریترن ها مهم هستند 
}
function update_order_price2($order_price){
return $order_price / 5 ; //10000
//در فیلتر ها ریترن ها مهم هستند 
// خروجی اخر ما 10000 است
}
add_filter('get_order_price','update_order_price');
add_filter('get_order_price','update_order_price2');

$resalt=apply_filters( 'get_order_price', 25000 );
echo $resalt;