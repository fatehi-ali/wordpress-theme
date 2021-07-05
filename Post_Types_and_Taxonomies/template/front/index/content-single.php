<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post() ?>
    <div class="titlebarpub">
      <div class="col-12">
        <nav><a href="#">خانه</a> / <a href="#">مقالات</a> / مقالات اپل</nav>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-9 ">
        <div class="row">
          <div class="col-12">
            <div class="singlecntentt">
              <article class="">
              </article>
              <?php the_post_thumbnail();?>
              <img src="" alt="">
              <?php the_content(); ?>
              </article>
              <div class="authorboxs">
                <img src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => '60']); ?>" alt="">
                <strong><?php echo get_the_author_meta('first_name'); ?></strong>
                <p> <?php echo get_the_author_meta('description'); ?> </p>
              </div>
              <div class="metainfos d-none d-md-block"><i class="fa fa-calendar" aria-hidden="true"></i> تاریخ انتشار:<?php the_date(); ?></div>
              <div class="metainfos d-none d-md-block"><i class="fa fa-eye" aria-hidden="true"></i> ۱۵۰۰ بازدید</div>
              <div class="metainfos d-none d-md-block"><i class="fa fa-bars" aria-hidden="true"></i> دسته بندی:
                <a href="#">مقالات</a>, <a href="#">اخبار آیفون</a>
              </div>
            </div>
            <div class="metainfos d-none d-md-block"><i class="fa fa-tags" aria-hidden="true"></i>
              <a href="#"><?php the_tags(); ?></a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
          <div class="col-12 d-none d-md-block ">
            <div class="titlearea">
              <h3>مطالب مرتبط</h3>
            </div>
          </div>
          <div class="col-6 col-md-4 d-none d-md-block">
            <div class="contentbox">
              <header class="articlebox">
                <figure>
                  <a href="#"><img src="images/articlesample.jpg"></a>
                  <a href="#">
                    <h2>آنچه از IOS11 باید بدانید</h2>
                  </a>
                </figure>
              </header>
              <div class="datebox">
                ۳۰ مهر ۱۳۹۶</div>
            </div>
          </div>
          <div class="col-6 col-md-4 d-none d-md-block">
            <div class="contentbox">
              <header class="articlebox">
                <figure>
                  <a href="#"><img src="images/articlesample.jpg"></a>
                  <a href="#">
                    <h2>آنچه از IOS11 باید بدانید</h2>
                  </a>
                </figure>
              </header>
              <div class="datebox">
                ۳۰ مهر ۱۳۹۶</div>
            </div>
          </div>
          <div class="col-6 col-md-4 d-none d-md-block">
            <div class="contentbox">
              <header class="articlebox">
                <figure>
                  <a href="#"><img src="images/articlesample.jpg"></a>
                  <a href="#">
                    <h2>آنچه از IOS11 باید بدانید</h2>
                  </a>
                </figure>
              </header>
              <div class="datebox">
                ۳۰ مهر ۱۳۹۶</div>
            </div>
          </div>
          <div class="col-12">
            <div class="titlearea">
              <h3>دیدگاه ها</h3>
            </div>
          </div>
          <div class="col-12">
            <div class="singlecntentt commtnsentar">
              <form class="" action="index.html" method="post">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <textarea name="name" placeholder="متن دیدگاه شما"></textarea>
                  </div>
                  <div class="col-12 col-md-4">
                    <label for="name">نام شما</label>
                    <input type="text" name="name" id="name" value="" placeholder="مثلا علی حاجی محمدی">
                    <label for="email">ایمیل شما</label>
                    <input type="email" name="email" id="email" value="" placeholder="ali@alistore.com">
                    <button type="button" name="button">ارسال دیدگاه</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="singlecntentt lcomments">
              <img src="images/MrAliCommenter.jpg" alt="">
              <strong>علی در ۶ مهر ۹۶ گفته:</strong>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
              <a href="#" class="replyb"><span>پاسخ</span><i class="fa fa-reply" aria-hidden="true"></i>
              </a>
            </div>
            <div class="singlecntentt lcomments">
              <img src="images/MrAliReplyer.jpg" alt="">
              <strong>علی در ۶ مهر ۹۶ گفته:</strong>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
              <a href="#" class="replyb"><span>پاسخ</span><i class="fa fa-reply" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>