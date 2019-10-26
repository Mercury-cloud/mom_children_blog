<!-- prev and next post -->
<?php if(get_previous_post_link() || get_next_post_link()): 
?>
<div class="posts-pagination text-center">
    <?php 
        // get the prev and next post
        if(get_previous_post_link('%link','<i class="fa fa-arrow-left"></i> %title' , true)):
            echo '<span class="prev-link">';
            echo previous_post_link('%link','<i class="fa fa-arrow-left"></i> %title' , true);
            echo '</span>';
        else:
            echo '<span class="prev-link disabled">
                    Previuos Post <i class="fa fa-arrow-left fa-fw"></i>
                </span>';
        endif;
        // next post
        if(get_next_post_link('%link','<i class="fa fa-arrow-left"></i> %title' , true)):
            echo '<span class="next-link">';
                next_post_link('%link',' %title <i class="fa fa-arrow-right"></i>' , true);
            echo '</span>';
        else:
            echo '<span class="next-link disabled">
                    Next Post <i class="fa fa-arrow-right"></i>
                </span>';
        endif;
        echo '<div class="fix"></div>';
    ?>
</div>
<?php endif; ?>