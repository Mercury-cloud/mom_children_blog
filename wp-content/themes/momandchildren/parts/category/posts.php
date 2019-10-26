<?php 
// posts query
$cat_posts_args = array(
    'post_type'     => 'post' , 
    'cat'           => $cat   ,
    'posts_per_page'=> 5      , 
    'orderby'       => 'ID'   ,
    'order'         => $sorting,
    'paged'         => get_query_var('paged'),
);
$cat_posts = new WP_Query($cat_posts_args);
// loop the data of posts
if($cat_posts->have_posts()): // cheack if there was posts
    while($cat_posts->have_posts()):
        $cat_posts->the_post(); if($shaper !== "line"): ?>
            <div class="cat-design-post-box">
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
                <!-- image container -->
                <div class="img-container">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('' , array(
                            'class' => 'img-responsive img-thumbnail' , 
                            'title' => 'Post Image'
                        )); ?>
                    </a>
                </div>
                <!-- post content -->
                <div class="post-summery">
                    <?php the_excerpt(); ?>
                </div>
                <hr>
                <!-- categories -->
                <p class="post-coategories"> <i class="fa fa-tags fa-fw fa-lg"></i> 
                    <?php the_category(' '); ?>
                </p>
                <hr>
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
        <?php
        else:
            require (get_template_directory() . '/parts/category/posts-line.php');
        endif;        
    endwhile;
    wp_reset_postdata();
endif;
?>