<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masterclass_them
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/memcourse.css" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="head-container">
            <div class="left-side">
                <img class="head-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.png" alt="saint-tran">
                <div class="course_ttl">Brand strategy workshop</div>
                <div class="progress_val"> 40% complete</div>
            </div>
            <div class="right-side">
                 <div class="prev_btn">
                    <img src="https://sainttran.com/wp-content/themes/masterclass_them/assets/img/left-arrow-br.png" alt="left" class="arr_img">
                    <div>previous</div>
                 </div>
                 <div class="next_btn">
                    <div>Next</div>
                    <img src="https://sainttran.com/wp-content/themes/masterclass_them/assets/img/right-arrow-br-1.png" alt="right" class="arr_img">
                 </div>
                 <div class="btn_complete_lesson">Complete Lesson</div>
            </div>
        </div>
    </header>