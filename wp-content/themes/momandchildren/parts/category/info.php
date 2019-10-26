<?php 
    // get the posts 
    $cat_id = get_query_var( 'cat');
    $posts_count_args = array(
        'cat'       => $cat_id,
        'count'     => true,
        'post_type' => 'post'
    );
    $posts_count = new WP_Query($posts_count_args);
?>
<div class="cat-options text-center">
    <div class="head-options">
        <!-- page sorting -->
        <span class="pull-left sorting">Sort <i class="fa fa-sort fa-fw"></i>
            
            <a href="<?php echo home_url($wp->request); ?>?sort=ASC&shape=<?php echo $shaper ?>" 
                <?php if(isset($_GET['sort']) && $_GET['sort'] === "ASC"):// if asc active ?>
                    class="active"
                <?php endif; ?>
            >ASC</a> ||
            <a href="<?php echo home_url($wp->request); ?>?sort=DESC&shape=<?php echo $shaper ?>" 
                <?php if(!isset($_GET['sort']) || $_GET['sort'] !== "ASC"):// if desc is active ?>
                    class="active"
                <?php endif; ?>
            >DESC</a>

        </span>
        <h1>Wellcome To <span>
            <?php single_cat_title(); ?>'s</span> Category</h1>
        <!-- page shape -->
        <span class="pull-right shape hidden-xs">Shape
            <!-- get the box shape --> 
            <a href="<?php echo home_url($wp->request); ?>?shape=box&sort=<?php echo $sorting ?>" 
                <?php if(!isset($_GET['shape']) || $_GET['shape'] !== "line"):// if asc active ?>
                    class="active"
                <?php endif; ?>
            ><i class="fa fa-grip-horizontal fa-fw"></i></a> || 
            <!-- get the line shape -->
            <a href="<?php echo home_url($wp->request); ?>?shape=line&sort=<?php echo $sorting ?>" 
                <?php if(isset($_GET['shape']) && $_GET['shape'] === "line"):// if asc active ?>
                    class="active"
                <?php endif; ?>
            ><i class="fa fa-grip-lines fa-fw"></i></a>
        </span>
    </div>
    <div class="cat-desc hidden-xs">
        <span class="cat-slug">
            <?php 
                if(category_description()): // check if have category describtion
                    echo category_description(); // get the category description
                else:
                    echo '<span style="color:red;">This Category Has No Description</span>';
                endif; 
            ?>
        </span>
    </div>
</div>