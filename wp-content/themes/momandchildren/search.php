<?php get_header(); ?>
<?php $search_phrase = isset($_GET['s']) ? FILTER_VAR($_GET['s'],FILTER_SANITIZE_STRING) : null ; ?>
<?php 
    // get the posts search args
    $search_posts_args = array(
        's'              => $search_phrase, 
        'post_type'      => 'post', 
        'posts_per_page' => 10,
        'orderby'        => 'ID', 
        'order'          => 'DESC', 
        'paged'         => get_query_var('paged'),
    );
    // get the all posts to be ready to be fetched
    $search_posts = new WP_Query($search_posts_args);
?>
<div class="search-container container">
    <div class="row">
       
        <!-- search form and header in the same time -->
        <div class="search col-md-12">
            <form role="search" method="get" id="searchform" class="searchform form-horizental" action="<?php echo get_site_url(); ?>">
                <div class="form-group">
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="<?php echo $search_phrase; ?>" name="s" id="s" placeholder="Search for something...">
                    </div>
                    <button class="col-md-2 button-search">Search <i class="fa fa-search fa-fw"></i></button>
                </div>
            </form>
        </div>
        <!-- posts container -->
        <div class="col-md-9">
            <?php
                if($search_posts->have_posts()):
                while($search_posts->have_posts()):
                    $search_posts->the_post(); 
            ?>
                <div class="cat-design-post-line">
                    <!-- post title -->
                    <h3 class="post-title">
                        <a href="<?php the_permalink();// link of the post ?>">
                            <?php the_title(); // title of the post?> 
                        </a>
                    </h3>
                    <!-- post author -->
                    <span class="post-author">
                        <i class="fa fa-user fa-fw"></i> 
                        <?php the_author_posts_link(); ?>
                    </span>
                    <!-- post date -->
                    <span class="post-date">
                        <i class="fa fa-calendar fa-fw"></i> 
                        <?php echo get_the_date(); // get the author ?>
                    </span>
                    <!-- comments number -->
                    <span class="post-comments">
                        <i class="fa fa-comments fa-fw"></i> 
                        <?php comments_popup_link('No Comments' , 'One Comment' , '( % ) Comments' , 'comment-url' , 'Comments Disabled'); ?>
                    </span>
                    <div class="fix"></div>
                    <!-- image container -->
                    <div class="img-container col-md-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('' , array(
                                'class' => 'img-responsive img-thumbnail' , 
                                'title' => 'Post Image'
                            )); ?>
                        </a>
                    </div>
                    <!-- post content -->
                    <div class="post-summery col-md-9">
                        <?php the_excerpt(); ?>
                    </div>
                    <hr>
                    <div class="fix"></div>
                    <!-- categories -->
                    <p class="post-coategories"> <i class="fa fa-tags fa-fw fa-lg"></i> 
                        <?php the_category(' '); ?>
                    </p>
                    <!-- tags -->
                    <p class="post-tags">
                        <?php 
                            if(has_tag()):
                                the_tags();
                            else:
                                echo '<span class="post-no-tags">No Tags Was Found.</span>';
                            endif;    
                        ?>
                    </p>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <!-- aside container -->
        <div class="col-md-3">
            <?php 
                /*
                 ** get the sidebar 
                */
                get_sidebar();
            ?>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>