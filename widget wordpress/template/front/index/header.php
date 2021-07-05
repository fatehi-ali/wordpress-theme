  <div class="maincontent">
    <div class="col-12">
      <div class="row justify-content-between">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="logoarea">
           <?php the_custom_logo(); ?>
            <h1><?php bloginfo('name'); ?></h1>
            <h3><?php bloginfo('description'); ?></h3>
          </div>
        </div>
        <div class="col-4 d-none d-md-block col-md-6 col-lg-4">
          <div class="searcharea">
            <ul>
              <!-- <li><a href="#">عضویت</a></li>
              <li><a href="#">ورود</a></li>
              <li><a href="#">سبدخرید</a></li> -->
              <?php wp_nav_menu([
                'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu'
              ]); ?> 
            </ul>
            <form>
              <input type="text" name="search" value="" placeholder="مثلا: قاب آیفون">
              <button type="button" name="button">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mainmenuarea">
          <a id="sidemobilev" class="sidemenuv d-block d-sm-none" href="#sidr"><i class="fa fa-bars" aria-hidden="true"></i>
          </a>
          <div id="sidr" class="sidemenumobile">
            <!-- Your content -->
            <ul>
              <!-- <li><a href="#">خانه</a></li>
              <li><a href="#">مقالات</a>
                <ul>
                  <li><a href="#">اخبار اپل</a></li>
                  <li><a href="#">اپلیکیشن های آیفون</a>
                    <ul>
                      <li><a href="#">کاربردی</a></li>
                      <li><a href="#">امنیتی</a>
                        <ul>
                          <li><a href="#">کاربردی</a></li>
                          <li><a href="#">امنیتی</a></li>
                          <li><a href="#">عکاسی</a></li>
                        </ul>
                      </li>
                      <li><a href="#">عکاسی</a></li>
                    </ul>
                  </li>
                  <li><a href="#">بازی های آیفون</a></li>
                </ul>
              </li>
              <li><a href="#">محصولات</a></li>
              <li><a href="#">بلاگ</a></li>
              <li><a href="#">درباره ما</a></li>
              <li><a href="#">ارتباط با ما</a></li> -->
              <?php wp_nav_menu([
                'theme_location' => 'top-bar'
              ]); ?>
            </ul>
          </div>
          <div class="col-12 d-none d-sm-block">
            <ul>
              <!-- <li><a href="#">خانه</a></li>
              <li><a href="#">مقالات</a>
                <ul>
                  <li><a href="#">اخبار اپل</a></li>
                  <li><a href="#">اپلیکیشن های آیفون</a>
                    <ul>
                      <li><a href="#">کاربردی</a></li>
                      <li><a href="#">امنیتی</a>
                        <ul>
                          <li><a href="#">کاربردی</a></li>
                          <li><a href="#">امنیتی</a></li>
                          <li><a href="#">عکاسی</a></li>
                        </ul>
                      </li>
                      <li><a href="#">عکاسی</a></li>
                    </ul>
                  </li>
                  <li><a href="#">بازی های آیفون</a></li>
                </ul>
              </li>
              <li><a href="#">محصولات</a></li>
              <li><a href="#">بلاگ</a></li>
              <li><a href="#">درباره ما</a></li>
              <li><a href="#">ارتباط با ما</a></li> -->
               <?php wp_nav_menu([
                'theme_location' => 'main-menu'
              ]); ?> 
            </ul> 
            <ul class="speciallink d-none d-md-block">
              <li><a href="#">آیفون ۱۰ را ببینید</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">