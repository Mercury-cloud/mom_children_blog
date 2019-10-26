<?php 
    /* 
    ** This function get the page header 
    */
    get_header(); 
?>
<?php if(is_category()): 

    // important vars
    global $wp;
    // get the current url get requests
    $sorting = isset($_GET['sort']) ? filter_var($_GET['sort'] , FILTER_SANITIZE_STRING) : "DESC";
    $shaper = isset($_GET['shape']) ? filter_var($_GET['shape'] , FILTER_SANITIZE_STRING) : "box";    

?>
<!-- all posts container -->
<div class="container main-category">
    <div class="row">
        <?php 
            /*
            ** require the category info
            */
            require_once (get_template_directory() ."/parts/category/info.php");
        ?>
        <hr class="dotted">
        <div class="col-md-9">
            <?php 
                /*
                ** require the category posts
                */
                require_once (get_template_directory() ."/parts/category/posts.php");
            ?>
            <div class="pagination">
                <?php echo numbring_pagination(); ?>
            </div>
        </div>
        <div class="col-md-3 side-bar">
            <?php 
                if(is_active_sidebar('category-sidebar') && is_category('wolrd-news')):
                    dynamic_sidebar('category-sidebar');
                else:
                    get_sidebar();
                endif;
            ?>
        </div>
    </div>
    
</div>
<!-- end all posts container -->
<?php else: require_once (get_template_directory() ."/404.php"); ?>
<?php endif; ?>
<?php
    /*
    ** this function get the footer
    */
    get_footer(); 
?>