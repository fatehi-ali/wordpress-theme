<?php
function wp_api_add_price_metabox()
{
    
    add_meta_box(
        'wp_api_price_metabox',
        'قیمت مطلب',
        'wp_api_price_metabox_handler',
        'post',
        'side',
        'default',
    );

}

function wp_api_price_metabox_handler($post)
{

    $post_price = get_post_meta($post->ID, 'wp_apis_price', true);

    if (!empty($post_price)) {
        $post_price_format = number_format($post_price);
    } else
        $post_price_format = $post_price;
    // true می گوید که ارایه بر نگردان
    include WO_PLUGIN_PATH_tpl . 'admin/metaboxes/metaboxes.php';

}

function wp_api_save_price_metabox($post_id)
{

    if (isset($_POST['wp_apis_post_price'])) 
    {
        update_post_meta($post_id, 'wp_apis_price', $_POST['wp_apis_post_price']);
    }

}

add_action('add_meta_boxes', 'wp_api_add_price_metabox');
add_action('save_post', 'wp_api_save_price_metabox');

// برای استفاده از قیمت  در قالب از کد زیر استفاده می کنیم 
//   get_post_meta(get_the_ID(),'wp_apis_price',true);