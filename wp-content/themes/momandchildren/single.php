<?php 
    /* 
     ** This function get the page header 
    */
    get_header(); 
?>
<div class="single-post-header">
    <?php 
        /**
         * require the header
         */
        require_once get_template_directory() . '/parts/single/header.php';
    ?>
</div>
<!-- all posts container -->
<div class="container">
    <?php 
        /*
         ** require the broadcamp 
        */
        //require_once (get_template_directory() . '/parts/breadcrumb.php');    
    ?>
    <div class="fix"></div>
    <div class="col-md-9">
        <?php
            /*
             ** get the single post 
            */
            require_once "parts/single/posts.php"; 
        ?>
        <div class="next-prev-posts-single">

            <!-- gonna create a custom page of next and previous comments -->
            <?php
                /*
                 ** get the next and prev posts 
                */
                require_once (get_template_directory() . '/parts/single/pagination.php');    
            ?>

        </div>

        <div class="random-posts-single">
            <?php
                /*
                 ** get the random posts section 
                */
                require_once (get_template_directory() . '/parts/single/random_posts.php');    
            ?>
        </div>

        <hr class="dotted">

        <!-- author description -->
        <?php
            /*
             ** get the author meta 
            */
            require_once (get_template_directory() . '/parts/single/author_meta.php');    
        ?>

        <hr class="dotted">

        <div class="fix"></div>

        <!-- end all posts container -->

        <div class="comments-section">
            <?php comments_template(); ?>
        </div>
    </div>

    <div class="col-md-3"><?php get_sidebar(); ?></div>
</div>
<!-- start comments section -->
<?php
    /*
    ** this function get the footer
    */
    get_footer(); 
?>