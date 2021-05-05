<?php 
/*
Plugin Name: MyFirstPlugin
Plugin URI: https://sabziman.com/
Description: This is the first plugin made by Ali Fatehi 
Version: 1.0.0.0
Author: FatehiAli
Author URI: https://FatehiAli.com
License: GPLv2 or later
Text Domain: akismet
*/
function test($name){
    echo "my name is {$name}";
}
test("ali");