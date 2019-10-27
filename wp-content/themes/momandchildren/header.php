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

     <!-- page loader when start only -->
    <?php if(!is_home()): ?>
      <style>
        .loader{color : #FFF; text-align : center;position : fixed; top : 0px ; width : 100%; height : 100%; background-color : black; z-index : 10000000; transition : all 0.5 ease-in-out}
        .lds-ring {
          width: 64px;
        height: 64px;
        margin: 0px auto;
        margin-top: 26%;
        }
        .lds-ring div {
          box-sizing: border-box;
          display: block;
          position: absolute;
          width: 51px;
          height: 51px;
          margin: 6px;
          border: 6px solid #fff;
          border-radius: 50%;
          animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
          border-color: #fff transparent transparent transparent;
        }
        .lds-ring div:nth-child(1) {
          animation-delay: -0.45s;
        }
        .lds-ring div:nth-child(2) {
          animation-delay: -0.3s;
        }
        .lds-ring div:nth-child(3) {
          animation-delay: -0.15s;
        }
        @keyframes lds-ring {
          0% {
            transform: rotate(0deg);
          }
          100% {
            transform: rotate(360deg);
          }
        }
      </style>
    <?php endif; ?>
</head>
<body>
<?php if(!is_home()): ?>
  <div class="loader">
    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
      Website Is Almost Loaded
  </div>
<?php endif; ?>

<nav id="navbar">
    
    <div class="upper">
        <div class="container">

          <!-- logo and social links -->
          <div class="logo_social">
                <a class="logo" href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Logo"></a>
                <a class="logo_phone" href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/phone_logo.png" alt="Logo"></a>
               
                <div class="seach_social">
                    <!-- social links -->
                    <div class="social_links">
                        <a class="facebook" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/facebook.svg" alt="Facebook"></a>
                        <a class="instagram" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.svg" alt="Instagram"></a>
                        <a class="twitter" href="#" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.svg" alt="Twitter"></a>
                    </div>
                    <!-- search toggle button -->
                    <div class="search_icon">
                        Search
                        <span>
                            <svg class="svg-inline--fa fa-search fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                        </span>
                    </div>
                    <!-- search show form -->
                    <div class="search_form">
                        <form action="/" method="get">
                            <input type="text" class="form-control searchValue" placeholder="Search..." name="s" id="searchValue" value="<?php the_search_query(); ?>" />
                            <button>
                                <svg class="svg-inline--fa fa-search fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>                          
                            </button>
                        </form>
                    </div>

                </div>

          </div>

          
        </div>
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
      </div>
      
      <!-- nav links -->
      <div class="nav_links">
          <div class="container">
            <?php me_navbar_menu() ?>
          </div>
      </div>

  </div>
</nav>



