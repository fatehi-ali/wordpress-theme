<div class="titlebarpub">
  <div class="col-12">
    <nav><a href="#">خانه</a> / <a href="#">مقالات</a> / مقالات اپل</nav>
    <h1>مقالات اپل</h1>
  </div>
</div>
</div>
<div class="row">
  <div class="col-12 col-lg-9 ">
    <div class="row">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

          <div class="col-6 col-md-4">
            <div class="contentbox">
              <header class="articlebox">
                <figure>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                  <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                  </a>
                </figure>
              </header>
              <div class="datebox"><?php the_time(); ?></div>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

      <div class="pagenumbers">
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
      </div>
    </div>
  </div>