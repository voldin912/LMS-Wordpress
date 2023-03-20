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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    
    <?php wp_head(); ?>
</head>

<body>

<div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <a class="logo-mobile-menu" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.png" alt="">
                </a>
                <div class="i1 df border_b" style="align-items: center; justify-content: space-between;">
                    <a href="">Masterclass</a>
                    <a href="">All</a>
                </div>
                <div class="i1 border_b">
                    <a href="<?php echo home_url(); ?>/consultancy/">1:1 consultancy</a>
                </div>
                <div class="i1 border_b">
                    <a href="<?php echo home_url(); ?>/blog/">Blog</a>
                </div>
                <div class="i1">
                    <a href="<?php echo home_url(); ?>/login/">members area</a>
                </div>
                <div class="b-sub">
                    <div class="block-subscribe">
                        <form action="">         
                            <div class="t1">Once in a while I send hilarious emails with insightful tips. Curious?</div>
                            <div class="container-fs">
                                <div style="display: flex; flex-direction: column;">
                                <input class="input-subscribe" type="text" placeholder="Your pretty name" name="name" required>
                                <input  class="input-subscribe"type="text" placeholder="myemail@toilet.com" name="mail" required>
                                </div>
                                <label>
                                <input class="chackbox-sub" type="checkbox" checked="checked" name="subscribe">I prefer whatsapp</label>
                            </div>

                            <div class="btn-submit">
                                <input type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arr-right-subscribe.svg" alt="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="b-panel" style="display: flex; align-items: flex-start;">
                    <a class="btn" href="">$USD</a>
                    <?php echo do_shortcode('[language-switcher]') ?>
                </div>
            </div>
        </div>     

        <header>
            <div id="myheader" class="header-main">
                <div class="container">
                    <div class="block df jb vc">
                        <div class="left-side">
                            <a class="logo-scroll-head" href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-img.png" alt="">
                            </a>
                            <nav>
                                <ul>
                                    <li><a class="btn-custom" href="<?php echo home_url(); ?>/#courses">Courses</a></li>
                                    <li><a class="btn-custom" href="<?php echo home_url(); ?>/consultancy">1:1 consultancy</a></li>
                                    <li><a class="btn-custom" href="<?php echo home_url(); ?>/blog">blog</a></li>
                                </ul>
                            </nav>
                        </div>
                        <a class="btn btn-custom" href="<?php echo home_url(); ?>/login">members area</a>                
                    </div>
                </div>
            </div>
            <div class="menu"
                <button id="burger-menu">
                    <div class="menu-btn">menu</div>
                </button>
            </div> 
        </header>