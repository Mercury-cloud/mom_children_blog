<?php
$post_id = get_queried_object_id(); // post id
// category id       
$cat_id = wp_get_post_categories($post_id);

// getting posts randomly
$random_args = array(
    'posts_per_page' => 10 , // posts limit
    'category__in'   => $cat_id, // only from this category
    'post_type'      => 'post' , // only posts
    'post_status'    => 'publish', // only published
    'orderby'        => 'rand' , // random posts
    'post__not_in'   => array($post_id)  // don't get current post 

);
$random_posts = new WP_Query($random_args);

if($random_posts->have_posts()): ?>
    <h2 class="rand-head text-center">Some Random Posts</h2>
    <ul class="list-unstyled random-post">
    <?php while($random_posts->have_posts()):
        $random_posts->the_post(); 
    ?>
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
                        'class' => 'img-responsive' , 
                        'title' => 'Post Image'
                    )); ?>
                </a>
            </div>

            <!-- the post excerpt -->
            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>
            
        </li>

    <?php endwhile; ?>
    </ul>
<?php 
    wp_reset_postdata(); // rest all values 
endif;  ?>