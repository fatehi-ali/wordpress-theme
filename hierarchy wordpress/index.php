<?php get_header();?>

//حلقه های وردپرس
<?php if(have_posts()):?>
    <?php while(have_posts()): the_post();?>

      <h2><?php the_title();?></h2>
      <h6><?php the_content();?></h2>
      <h5><?php the_time();?></h2>
      <h5><?php the_author();?></h2>

    <?php endwhile;?>
<?php endif;?>

<?php get_footer();?>
<?php get_template_part('ادرس فایل');?>