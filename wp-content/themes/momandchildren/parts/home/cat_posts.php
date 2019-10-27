<?php 
    $all_cats_args = array(
        'orderby'   => 'ID' , 
        'order'     => 'ASC',
        'parent'    => 0
    );
    $all_cats = get_categories($all_cats_args);
    if(!empty($all_cats)):
    foreach($all_cats as $cat_info):
        // category id
        $cat_id = $cat_info->term_id; ?>
        <div class="cat-container">

            <!-- category title -->
            <h2 class="cat-title">
                <a href="<?php echo get_category_link($cat_id); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/family.svg" alt="Family" />
                    <?php echo $cat_info->name; ?>
                </a>
            </h2>

            <div class="post-container">
                
                <?php 
                    // get this category posts
                    $cat_posts_args = array(
                        'post_type'     => 'post' , 
                        'cat'           => $cat_id , 
                        'posts_per_page'=> 3    ,
                        'orderby'       => 'ID' , 
                        'order'         => 'DESC'
                    );
                    $cat_posts = new WP_Query($cat_posts_args);
                    // check if posts exist
                    if($cat_posts->have_posts()):
                        // posts counter
                        $x = 0; 
                        // echo the posts
                        echo "<div class='row'>";
                        while($cat_posts->have_posts()): $cat_posts->the_post(); $x += 1; 
                            ?>
                            <?php echo $x == 2 ? '<div class="col-md-12"><div class="row">' : null ?>
                                <div class="post-rand-li 
                                    <?php if($x == 1): ?>
                                        col-md-12 col-sm-12 first_post
                                    <?php else: ?>
                                        col-md-6 col-sm-6 seconds_posts
                                    <?php endif; ?>
                                    ">
                                    <?php /*
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
                                    */ ?>
                                    <div>
                                        <!-- image container -->
                                        <div class="img-container">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('' , array(
                                                    'class' => 'img-responsive' , 
                                                    'title' => 'Post Image'
                                                )); ?>
                                            </a>
                                        </div>
                                            
                                        <!-- category -->
                                        <?php 
                                            $cat = get_the_category();
                                            if(count($cat) > 0){
                                                $name = $cat[0]->name;
                                                $id = $cat[0]->term_id;
                                                $link = get_category_link($id);
                                            ?>
                                            <a class="category" href="<?php echo $link ?>"><?php echo $name ?></a>
                                        <?php } ?>

                                        <!-- post title -->
                                        <h3 class="post-title">
                                            <a href="<?php the_permalink();// link of the post ?>">
                                                <?php the_title(); // title of the post?>
                                            </a>
                                        </h3>
                                        
                                        <?php if($x == 1): ?>
                                            <div class="excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            <?php echo $x == 3 ? '</div"></div>' : null ?>
                        <?php endwhile; 

                        echo "</div>";
                        wp_reset_postdata(); // rest all values 
                    endif;
                ?>

                <div class="fix"></div>

                <div class="text-center got_to_container">
                    <a href="/tag/recommended" class="got_to_recommended">View All <?php echo $cat_info->name ?> Articles</a>
                </div>

            </div>

        </div>
        </div>
    <?php endforeach; 
    wp_reset_postdata(); // rest the post data
    endif; ?>