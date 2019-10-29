<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php require_once (get_template_directory() . '/parts/meta.php'); ?>
    <title>
      <?php wp_title('-' , true , 'right'); ?> 
      <?php bloginfo('name'); ?>
    </title>

    <link rel="pingpack" href="<?php bloginfo('pingpack_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body>

<nav id="navbar">
    
    <div class="upper">
        <div class="container">
          <!-- logo and social links -->
          <div class="logo_social">
                <a class="logo" href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Logo"></a>
                <a class="logo_phone" href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/phone_logo.png" alt="Logo"></a>
               
                <div class="seach_social">
                    <!-- search toggle button -->
                    <div class="search_icon">
                        Search
                        <span>
                            <svg class="svg-inline--fa fa-search fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                        </span>
                    </div>
                    <!-- search show form for phone -->
                    <div class="search_form">
                        <form action="/" method="get">
                            <input type="text" class="form-control searchValue" placeholder="Search..." name="s" id="searchValue" value="<?php the_search_query(); ?>" />
                            <button>
                                <svg class="svg-inline--fa fa-search fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>                          
                            </button>
                        </form>
                    </div>

                    <!-- search show form for pc-->
                    <div class="search_form_pc">
                        <form action="/" method="get">
                            <input type="text" class="form-control searchValue" placeholder="Search..." name="s" id="searchValue" value="<?php the_search_query(); ?>" />
                            <button>
                                <svg class="svg-inline--fa fa-search fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>                          
                            </button>
                        </form>
                    </div>

                    <!-- social links -->
                    <div class="user_actions">
                        <a class="profile" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/user.png" alt="User"></a>
                        <a class="cart" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/shop.png" alt="Cart"></a>
                    </div>
                </div>

                <div class="fix"></div>
          </div>
        </div>
        <div class="border_bottom_gradint"></div>
    </div>


    <div class="container">
    
      <!-- toggle button -->
      <div class="d-none d-sm-block toggle_nav_links">
            <div class="toggle_navs">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="title_toggle_navs d-none d-sm-block">Menu</span>
            <!-- social links -->
            <div class="social_links_phone">
                <a class="facebook" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="Facebook"></a>
                <a class="instagram" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.svg" alt="Instagram"></a>
                <a class="youtube" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/youtube.png" alt="Youtube"></a>
            </div>
      </div>
      
      <!-- nav links -->
      <div class="nav_links">
          <div class="container">
            <?php me_navbar_menu() ?>
            <!-- social links -->
            <div class="social_links_pc">
                <a class="facebook" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.png" alt="Facebook"></a>
                <a class="instagram" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.svg" alt="Instagram"></a>
                <a class="youtube" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/youtube.png" alt="Youtube"></a>
            </div>
          </div>
      </div>

  </div>
</nav>



