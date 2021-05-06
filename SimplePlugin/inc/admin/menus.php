<?php
function Simple_Plugin_Add_Menu(){
    add_menu_page(
        'منوی سفارشی ادرس',        // a. نوشته بالا تب
        'منوی سفارشی  ',          //  b. نوشته منو
        'manage_options',         //   c.  می گوید این منو در محیط مدیریت است
        'simple_menu',           //    d. ادرس url
        'simple_menu_callback'  //     e. تابع قابل فراخوانی 
    );
}

function simple_menu_callback(){

}

add_action('admin_menu','Simple_Plugin_Add_Menu');