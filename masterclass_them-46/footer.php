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
	
	<footer>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
       var f1=0;
       var f3=$(".sec2-slider").height();
       var f2=$(".sec2-slider").position();
       var isMenuOpen=false;
       var wAppComp = "<div class=whatsapp><input  class=input-subscribe type=text></div>";
        $("#Option").click(function(){
        	var cbox=this.checked;
        	if(cbox==true) {
                $(".container-fs #btn_submit").css("bottom","7px");
                $(".wpcf7").append(wAppComp);
                $(".whatsapp .input-subscribe").attr("placeholder","+00 0000 00");
            }
        	else {
                $(".container-fs #btn_submit").css("bottom","45px");
                $(".whatsapp").remove();
            }
        })
         $("#mycheckbox").click(function(){
        	var cbox=this.checked;
        	if(cbox==true) {
            	$(".wpcf7").append(wAppComp);
                $(".whatsapp .input-subscribe").attr("placeholder","+00 0000 00");
                $(".container-fs #btn_submit").css("bottom","7px");
            }
        	else {
                $(".container-fs  #btn_submit").css("bottom","45px");
                $(".whatsapp").remove();
            }
        })
        $("#post-2").click(function(){
        	var isOpen=this.checked;
            if(isOpen==true) {  
            	$(".btn-buy").css("display","flex");
                $(".sec2-p .read-more-target .block-info").css("height","320");
            }
            else {
            	$(".btn-buy").css("display","none");
                $(".sec2-p .read-more-target .block-info").css("height","0");
            }
        })
		$(function() {
    		
            $(".swiper-slide-next").css("opacity","0.3");
            $(".swiper-slide-prev").css("opacity","0.3");
            $(".swiper-slide-active").css("opacity","1");
		});
        
        $(".btn_confirm").click(function(){
        	$(".cookie_modal").close();
        });
        function myFunction() {
        	if (window.pageYOffset > sticky) {
           	 	header.classList.add("sticky");
        	} else {
            	header.classList.remove("sticky");
        	}
        }
        $("#login-submit").click(function(){
        	location.href="https://sainttran.com/masterclass/all-courses/";
        });
        $(".course").click(function(){
       		location.href="https://sainttran.com/masterclass/course/";
        });
       
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
        window.onresize = function(){
        	if(window.innerWidth>768) {
            	$("#mobile-menu").removeClass("show_mobile_menu");
            	$(".menu-btn").text("menu");
                isMenuOpen=false;
            }
        }

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        var swiper = new Swiper(".mySwiper", {
            direction: 'vertical',
            slidesPerView: 1,
            autoHeight: true,
            effect: 'cards',
            centeredSlides: false,
            cardsEffect: {
                rotate: false,
                slideShadows: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
            }
        });
		
        $(".add-brown").click(function(){
        	$(".sec2-slider").addClass("bg-brown")
            $(".swiper-slide-next").css("opacity","0.3");
            $(".swiper-slide-prev").css("opacity","0.3");
            $(".swiper-slide-active").css("opacity","1");
        })
         $(".remove-brown").click(function(){
        	$(".sec2-slider").removeClass("bg-brown");
            $(".swiper-slide-next").css("opacity","0.3");
            $(".swiper-slide-prev").css("opacity","0.3");
            $(".swiper-slide-active").css("opacity","1");
        })
        $(".menu-btn").click(function(){
        	if(isMenuOpen==false) {
            	$("#mobile-menu").addClass("show_mobile_menu");
            	$(".menu-btn").text("close");
                isMenuOpen=true;
            }
        	else {
            	$("#mobile-menu").removeClass("show_mobile_menu");
            	$(".menu-btn").text("menu");
                isMenuOpen=false;
            }
        })
    </script>

<?php wp_footer(); ?>

</body>
</html>