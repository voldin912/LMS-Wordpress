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
			<div class="container">
                <div class="block">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/terms">Terms</a></li>
                        <li><a href="<?php echo home_url(); ?>/privacy">Privacy</a></li>
                        <li><a href="<?php echo home_url(); ?>/support">Support</a></li>
                    </ul>
                    <div class="copyright">
                    © 2023 Saint-Tran<br>
                    Secured with SSL
                    </div>
                    <div class="b-panel" style="display: flex; align-items: flex-start;">
                        <a class="btn" href="">$USD</a>
                        <?php echo do_shortcode('[language-switcher]') ?>
                    </div>
                </div>
            </div>
	</footer><!-- #colophon -->
</div>
	
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

    <script>
        var lazyLoadInstance = new LazyLoad({});
    
        var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        effect: 'coverflow',
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
        });

        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }

    </script>

<?php wp_footer(); ?>

</body>
</html>