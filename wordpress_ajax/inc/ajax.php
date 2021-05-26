<?php
$action='calculate_operation';
function wp_apis_handle_ajax_operation(){
$num1=$_POST['num1'];
$num2=$_POST['num2'];
  wp_send_json([
    'success' => true,
    'result'  => $num1+$num2
    ]);
}
add_action("wp_ajax_{$action}",'wp_apis_handle_ajax_operation');