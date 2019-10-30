<?php 
    /* 
    ** This function get the page header 
    */
    get_header(); 

?>
<!-- all posts container -->
<div class="container">
    <div class="row">
        <!-- Unique Images Slider -->
        <div class="col-md-12">
            <?php 
                /**
                 * get the images slider
                 */
                require_once (get_template_directory() . "/parts/home/images_slider.php");
            ?>
        </div>

        <!-- left sidebar -->
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>

        <div class="col-md-6 content_center">
            <?php 
                /**
                 * get the Recommended posts for main page
                 */
                require_once (get_template_directory() . "/parts/home/recommend_posts.php");
            ?>
            <br>
            <?php 
                /**
                 * pergenant section *week by week*
                 */
                require_once (get_template_directory() . "/parts/home/week_by_week.php");
            ?>          
            <br>
            <?php 
                /**
                 * get the main cats posts max 5
                 */
                require_once (get_template_directory() . "/parts/home/cat_posts.php");
            ?>

        </div>
        
        <!-- right sidebar -->
        <div class="col-md-3">
            <?php require_once (get_template_directory() . "/left_sidebar.php"); ?>
        </div>

    </div>
</div>
<!-- end all posts container -->
<?php
    /*
    ** this function get the footer
    */
    get_footer(); 
?>