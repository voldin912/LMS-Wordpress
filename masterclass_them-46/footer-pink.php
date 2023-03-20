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

	<footer style="background: #E5DDD3;">
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

        document.querySelector('.add-brown').onclick = function() {
        document.querySelector('.sec2-slider').classList.add('bg-brown');
        }
        document.querySelector('.remove-brown').onclick = function() {
        document.querySelector('.sec2-slider').classList.remove('bg-brown');
        }

        gsap.registerPlugin(ScrollTrigger);

        // Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll

        const locoScroll = new LocomotiveScroll({
        el: document.querySelector(".smooth-scroll"),
        smooth: true
        });
        // each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
        locoScroll.on("scroll", ScrollTrigger.update);

        // tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things
        ScrollTrigger.scrollerProxy(".smooth-scroll", {
        scrollTop(value) {
            return arguments.length
            ? locoScroll.scrollTo(value, 0, 0)
            : locoScroll.scroll.instance.scroll.y;
        }, // we don't have to define a scrollLeft because we're only scrolling vertically.
        getBoundingClientRect() {
            return {
            top: 0,
            left: 0,
            width: window.innerWidth,
            height: window.innerHeight
            };
        },
        // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
        pinType: document.querySelector(".smooth-scroll").style.transform
            ? "transform"
            : "fixed"
        });

        // --- RED PANEL ---
        gsap.from(".line-1", {
        scrollTrigger: {
            trigger: ".line-1",
            scroller: ".smooth-scroll",
            scrub: true,
            start: "top bottom",
            end: "top top"
        },
        scaleX: 0,
        transformOrigin: "left center",
        ease: "none"
        });

        // --- ORANGE PANEL ---
        gsap.from(".line-2", {
        scrollTrigger: {
            trigger: ".orange",
            scroller: ".smooth-scroll",
            scrub: true,
            pin: true,
            start: "top top",
            end: "+=100%"
        },
        scaleX: 0,
        transformOrigin: "left center",
        ease: "none"
        });

        // --- PURPLE/GREEN PANEL ---
        var tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".purple",
            scroller: ".smooth-scroll",
            scrub: true,
            pin: true,
            start: "top top",
            end: "+=100%"
        }
        });

        tl.from(".purple p", { scale: 0.3, rotation: 45, autoAlpha: 0, ease: "power2" })
        .from(
            ".line-3",
            { scaleX: 0, transformOrigin: "left center", ease: "none" },
            0
        )
        .to(".purple", { backgroundColor: "#28a92b" }, 0);

        // each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll.
        ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

        // after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
        ScrollTrigger.refresh();


    </script>

<?php wp_footer(); ?>

</body>
</html>