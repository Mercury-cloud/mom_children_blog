<?php 
    $all_cats_args = array(
        'orderby'   => 'ID' , 
        'order'     => 'ASC',
    );
    $all_cats = get_categories($all_cats_args);
    if(!empty($all_cats)):
    foreach($all_cats as $cat_info):
        // category id
        $cat_id = $cat_info->term_id; ?>
        <div class="col-md-6">
            <div class="cat-container">
            <!-- category title -->
            <h2 class="cat-title">
                <a href="<?php echo get_category_link($cat_id); ?>">
                <?php echo $cat_info->name; ?>
                <i class="fa fa-newspaper fa-fw"></i>
                </a>
            </h2>
            <ul class="post-container">
            <?php 
                // get this category posts
                $cat_posts_args = array(
                    'post_type'     => 'post' , 
                    'cat'           => $cat_id , 
                    'posts_per_page'=> 5     ,
                    'orderby'       => 'ID' , 
                    'order'         => 'DESC'
                );
                $cat_posts = new WP_Query($cat_posts_args);
                // check if posts exist
                if($cat_posts->have_posts()):
                    while($cat_posts->have_posts()):
                        $cat_posts->the_post(); ?>
                        <li>
                            <h3 class="post-title">
                                <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
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
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </li>
                    <?php endwhile;
                endif;
            ?>
            </ul>
            </div>
        </div>
    <?php endforeach; 
    wp_reset_postdata(); // rest the post data
    endif; ?>