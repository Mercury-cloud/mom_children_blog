<?php 
    $random_posts_args = array(
        'post_type'         => 'post',
        'orderby'           => 'ID',
        'order'             => 'DESC',
        'posts_per_page'    => 20
    );
    $random_posts = new WP_Query($random_posts_args); ?>
    <!-- the posts container div -->
    <div class="random-posts-container" id="homeRandom">
        <h2 class="rand-head text-center">Latest News <i class="fa fa-fire fa-fw"></i></h2>
        <ul class="list-unstyled random-post">
        <?php if($random_posts->have_posts()): // check if there are posts 
        // echo the posts
        while($random_posts->have_posts()): $random_posts->the_post(); ?>
            <li class="post-rand-li">
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
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </li>
        <?php endwhile; 
        wp_reset_postdata(); // rest all values 
        endif; ?>
        </ul>
    </div>