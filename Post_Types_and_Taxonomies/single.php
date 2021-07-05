<?php if (has_post_format('aside')) : ?>

<?php get_header(); ?>
<?php get_template_part('template/front/index/top-bar'); ?>
<?php get_template_part('template/front/index/header'); ?>
<?php get_template_part('template/front/index/content', 'single'); ?>
<?php get_template_part('template/front/index/sidebar'); ?>
<?php get_template_part('template/front/index/footer'); ?>
<?php get_footer(); ?>

<?php endif; ?>

<?php if (has_post_format('gallery')) : ?>

<?php get_header(); ?>
<?php get_template_part('template/front/index/top-bar'); ?>
<?php get_template_part('template/front/index/header'); ?>
<?php get_template_part('template/front/index/content', 'single'); ?>
<?php get_template_part('template/front/index/sidebar'); ?>
<?php get_template_part('template/front/index/footer'); ?>
<?php get_footer(); ?>

<?php endif; ?>