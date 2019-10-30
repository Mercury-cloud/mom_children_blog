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
            <br><br>
            <?php 
                $isStore = count($_POST) < 4 ? false : true;
                $isError = [];
                $hash = isset($_GET['hash']) ? $_GET['hash'] : false;

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

                if((!$isStore || count($isError) > 0) && !$hash){
                    /**
                     * pergenant section *week by week*
                     */
                    require_once (get_template_directory() . "/parts/home/week_by_week.php");
                }elseif($isStore){

                    // auth hash
                    $hash = md5(time() . $email  . $day . $month . $year . rand(100000,10000000));
                    global $wpdb;
                    $data = $wpdb->insert('wp_news_letter' , [
                        'email' => $email , 
                        'date'  => "$day-$month-$year",
                        'verified' => 0 , 
                        'type'   => 1 , 
                        'created_at' => date('d-m-Y h-i-s') , 
                        'hash'   => $hash,
                    ]);

                    $url = get_site_url().'/subscribe-news-letters-pergenancy?hash='.$hash;

                    $message = "
                        <h1>Hello , You've Subscribed Our News Letter</h1>
                        <p>Please Click <a href='$url'>Here</a> To Verify Your Email Address</p>
                        <p>If The Link Above Didn't Work , Please Click Here 
                            <a href='$url'>$url</a>
                        </p>
                    ";
                    $subject = 'Hello , May Your Please Verify Your Email To Verify Your Subscribtion.';
                    
                    $headers = array();
                    $headers[] = 'Content-Type: text/html; charset=UTF-8';
                    $headers[] = 'From: Mom&Children <kora4uemails@gmail.com>';

                    wp_mail($email , $subject , $message , $headers);
                    
                    echo "We've Send a Hash To Your Email Please Verifiy It";

                }elseif($hash){
                    global $wpdb;
                    $result = $wpdb->update('wp_news_letter', array('verified' => 1), array('hash' => $hash));
                    
                    if($result > 0){
                        echo "Email Verified Successfully";
                    }else{
                        echo "Email Doesn't Exist All Already Verified";
                    }
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