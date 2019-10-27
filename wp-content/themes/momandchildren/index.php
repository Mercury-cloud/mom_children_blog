<?php 
    /* 
    ** This function get the page header 
    */
    get_header(); 

?>
<!-- all posts container -->
<div class="container">
    <div class="row">
        <!-- main category -->
        <div class="col-md-12">
            <?php 
                /**
                 * get the Recommended posts for main page
                 */
                require_once (get_template_directory() . "/parts/home/recommend_posts.php");
            ?>
        </div>
        <div class="col-md-9">
            <?php 
                /**
                 * get the main cats posts max 5
                 */
                // require_once (get_template_directory() . "/parts/home/cat_posts.php");
            ?>
        </div>
        <div class="col-md-3">
            <?php //get_sidebar(); ?>
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