<?php 
    $random_posts_args = array(
        'post_type'         => 'post',
        'orderby'           => 'ID',
        'order'             => 'DESC',
        'tag'               => 'recommended',
        'posts_per_page'    => 3
    );
    $random_posts = new WP_Query($random_posts_args); ?>
    <!-- the posts container div -->
    <div class="recommended-posts-container" id="homeRecommended">
        <h2 class="recommend-head text-left">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.481 19.481" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 19.481 19.481">
            <g>
                <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z"/>
            </g>
            </svg>
            Recommended Articles 
        </h2>
        <div class="list-unstyled recommend-post">
        <?php if($random_posts->have_posts()): // check if there are posts 
                // posts counter
                $x = 0; 
                // echo the posts
                echo "<div class='row'>";
                while($random_posts->have_posts()): $random_posts->the_post(); $x += 1; 
                    ?>
                    <?php echo $x == 2 ? '<div class="col-md-4"><div class="row">' : null ?>
                        <div class="post-rand-li 
                            <?php if($x == 1): ?>
                                col-md-8 col-sm-12 first_post
                            <?php else: ?>
                                col-md-12 col-sm-6 seconds_posts
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
            endif; ?>
            <div class="fix"></div>
            <div class="text-center got_to_container">
                <a href="/tag/recommended" class="got_to_recommended">View All Recommended Articles</a>
            </div>
        </div>
    </div>