<?php
if (has_post_format('aside')) {
     get_header();
     get_template_part('template/front/index/top-bar'); 
     get_template_part('template/front/index/header'); 
     get_template_part('template/front/index/content', 'single');
     get_template_part('template/front/index/sidebar');
     get_template_part('template/front/index/footer');
     get_footer();

} elseif (has_post_format('gallery')) {
    get_header();
    get_template_part('template/front/index/top-bar'); 
    get_template_part('template/front/index/header'); 
    get_template_part('template/front/index/content', 'single');
    get_template_part('template/front/index/sidebar');
    get_template_part('template/front/index/footer');
    get_footer();
} else {
    get_header();
    get_template_part('template/front/index/top-bar'); 
    get_template_part('template/front/index/header'); 
    get_template_part('template/front/index/content', 'single');
    get_template_part('template/front/index/sidebar');
    get_template_part('template/front/index/footer');
    get_footer();
}