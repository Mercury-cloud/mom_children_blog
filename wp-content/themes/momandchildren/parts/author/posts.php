<!-- user posts -->
<div class="author-posts">
    <?php 
    $posts_per_page = 10 ;
    // get the user posts
    $author_posts_args = array(
        'author' => $author_id , 
        'posts_per_page' => $posts_per_page 
    );
    $author_query = new WP_Query($author_posts_args);

    if($author_query->have_posts()): // cheack if there was posts ?>
        <h2 class="text-center posts-head"><?php the_author_meta("first_name"); ?>'s Latest
        <?php if($posts_per_page <= $count_posts): echo $posts_per_page ; endif; ?>
        Posts</h2>
        <div class="fix"></div>
    <?php
        while($author_query->have_posts()):
            $posts_args = array(
                'posts_per_page' => 10 
            );
            $author_query->the_post($posts_args); ?>
            <div class="col-md-6">
                <div class="main-post">
                    <!-- post title -->
                    <h3 class="post-title">
                        <a href="<?php the_permalink();// link of the post ?>">
                            <?php the_title(); // title of the post?>
                        </a>
                    </h3>
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
            </div>
            <?php
        endwhile;
        /* 
        ** reset it after finishing the wordpress query
        */
        wp_reset_postdata(); // reset the posts query 
    endif; ?>
</div>