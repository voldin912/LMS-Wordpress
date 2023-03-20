<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masterclass_them
 */

?>

	<footer style="background: #FFF4EE;">
			
	</footer><!-- #colophon -->	
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" type="text/css" />

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.maskedinput.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

    <!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lazyload.js"></script>
 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper/swiper-bundle.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<?php wp_footer(); ?>

</body>
</html>