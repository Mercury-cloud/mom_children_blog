<?php 
    /* 
    ** This function get the page header 
    */
    get_header(); 

?>

<!-- all posts container -->
<div class="container">
    <div class="row">
        <!-- left sidebar -->
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>

        <div class="col-md-6 content_center">
            <br><br><br>
            <?php 
                $isStore = count($_POST) < 4 ? false : true;
                $isError = [];

                if($isStore){
                    $day = FILTER_VAR($_POST['DD'] , FILTER_SANITIZE_NUMBER_INT);
                    $month = FILTER_VAR($_POST['MM'] , FILTER_SANITIZE_NUMBER_INT);
                    $year = FILTER_VAR($_POST['YYYY'] , FILTER_SANITIZE_NUMBER_INT);
                    $email = FILTER_VAR($_POST['email'] , FILTER_VALIDATE_EMAIL);
                    
                    
                    
                    if(!$email){
                        $isError[] = 'Please Write a Valid Email Address';
                    }

                    if(strlen($email) < 1){
                        $isError[] = 'Email Field Required';
                    }

                    if(strlen($day) < 1){
                        $isError[] = 'Day Field Required';
                    }elseif($day < 0 || $day > 31){
                        $isError[] = 'Please Write A Valid Day';
                    }

                    if(strlen($month) < 1){
                        $isError[] = 'Month Field Required';
                    }elseif($month < 0 || $month > 12){
                        $isError[] = 'Please Write A Valid Month';
                    }

                    if(strlen($year) < 1){
                        $isError[] = 'Year Field Required';
                    }elseif($year < 1900 || $year > date('Y')){
                        $isError[] = 'Please Write A Valid Year';
                    }


                }

                if(!$isStore && count($isError) == 0){
                    /**
                     * pergenant section *week by week*
                     */
                    require_once (get_template_directory() . "/parts/home/week_by_week.php");
                }else{
                    echo "store data"; 
                }

            ?>
        </div>
        
        <!-- right sidebar -->
        <div class="col-md-3">
            <?php require_once (get_template_directory() . "/left_sidebar.php"); ?>
        </div>

    </div>
</div>
<!-- end all posts container -->


<?php
    /*
    ** this function get the footer
    */
    get_footer(); 
?>