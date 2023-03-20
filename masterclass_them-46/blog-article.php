<?php
/*
Template Name: blog-article
Template Post Type: post, page, product
*/

//

get_header();
?>

        <section class="sec1-ba">
            <div class="container">
                <div class="breadcrumbs">
                    <span><a href="<?php echo home_url(); ?>/blog/">Blog</a></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-icon-ar.svg" alt="">
                    <span><a href=""><?php the_title(); ?></a></span>
                </div>
            </div>
        </section>
        <section class="sec2-ba">
            <div class="container">
                <div class="block">
                    <div class="t1"><?php the_title(); ?></div>
                    <div class="t1-tag">
                        <div class="p-tag">
                        	<div class="tt2">06.06</div>
                            <?php the_tags( '<ul><li class="tag-btn">','</li><li class="tag-btn">','</li></ul>'); ?>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="left-side">
                        <?php the_post_thumbnail(); ?>
                        <div class="img-after-b">Photo: Fabian Heigel</div>
                    </div>
                    <div class="right-side">
                        <div class="t2">Uluwatu was my favourite area in Bali to prioritize work-life balance.
                            And by balance I mean: actually get work done, get some sun, eat delicious food, 
                            tone your bod and go out.
                            </div><div class="t2">
                            I spent a few months in Canggu before, circa Covid-era. Loved it there, but when after the 
                            borders opened - it got way too crowded so I left for Uluwatu, had some friends down there. 
                            I wanted to stay only for a month - I ended up staying for 6. At first I thought it was going 
                            to be boring (I’ve been a few times before), and it was. It was actually exactly what I needed
                            to focus on work and launch my first masterclass.
                        </div>
                        <div class="t3-block">
                            <div class="t3">
                                90% of people are lonely expats waiting for you to talk to them.<br>
                                I didn’t but you definitely should.
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        <section class="sec3-ba">
            <div class="container">
                <div class="block">
                    <div class="t1">The <br>localisation</div>
                    <div class="t2">
                        <div class="tt2">overall: </div>
                        <a class="tag-bl">Good</a>
                    </div>
                    <div class="t3">Uluwatu is the bottom part of Bali, 50 min from the airport without traffic. 
                        I lived in Bingin, which is I believe, the touristy, expat, pricey area. The beaches are 
                        beautiful (but lots of trash still and plastic bottles everywhere. I don’t think any turtles 
                        survive there, heartbreaking). Besides Dreamland, all of them require a 10 min hike so beware
                         (we’re on hills). Hip people hang out on Bingin beach. I, of course, didn’t.
                    </div>
                </div>
                <div class="block-slide">
                    <div id="scroller">
                        <ul class="df">
                            <li>
                                <div class="card">
                                    <img class="img-blog-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-article-img1.png" alt="">
                                    <div class="card-content">
                                        <div class="c-top">
                                            <div class="t1">Beaches nearby</div>
                                            <a class="tag-btn" href="">Good</a>
                                            <div class="item-desc">
                                            </div>
                                        </div>
                                        <div class="c-bottom">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-blog.svg" alt="">
                                            <div class="t2">List of uluwatu beaches from xxx.Com</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <img class="img-blog-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/trafic-light-img.png" alt="">
                                    <div class="card-content">
                                        <div class="c-top">
                                            <div class="t1">Traffic is light</div>
                                            <a class="tag-btn" href="">Good</a>
                                            <div class="item-desc">
                                                you don’t breath in gas pipes and you can actually walk without getting run over
                                            </div>
                                        </div>
                                        <div class="c-bottom">
                                            <img src="" alt="">
                                            <div class="t2"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <img class="img-blog-slide" src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img.png" alt="">
                                    <div class="card-content">
                                        <div class="c-top">
                                            <div class="t1">Beaches nearby</div>
                                            <a class="tag-btn" href="">Good</a>
                                            <div class="item-desc">
                                                you don’t breath in gas pipes and you can actually walk without getting run over
                                            </div>
                                        </div>
                                        <div class="c-bottom">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-blog.svg" alt="">
                                            <div class="t2">List of uluwatu beaches from xxx.Com</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <img class="img-blog-slide" src="a<?php echo get_template_directory_uri(); ?>/ssets/img/blog-article-img1.png" alt="">
                                    <div class="card-content">
                                        <div class="c-top">
                                            <div class="t1">Beaches nearby</div>
                                            <a class="tag-btn" href="">Good</a>
                                            <div class="item-desc">
                                                you don’t breath in gas pipes and you can actually walk without getting run over
                                            </div>
                                        </div>
                                        <div class="c-bottom">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-blog.svg" alt="">
                                            <div class="t2">List of uluwatu beaches from xxx.Com</div>
                                        </div>
                                    </div>
                                </div>
                            </li>     
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="sec4-ba">
            <div class="container">
                <div class="block">
                    <div class="t1">The <br>surf</div>
                    <div class="t2">
                        <div class="tt2">overall: </div>
                        <a class="tag-bl">Good</a>
                    </div>
                    <div class="t3">Pellentesque viverra finibus malesuada. Maecenas vitae nisl nisl. Cras non bibendum
                        sapien, vitae ultricies diam. Etiam condimentum pellentesque orci non dapibus. Maecenas ut ipsum nulla.
                        Aenean scelerisque efficitur ipsum non feugiat.
                    </div>
                    <div class="img-sec3-ba">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/the-surf.png" alt="">
                    </div>
                    <div class="img-after-b">Photo: @jk_jul</div>
                </div>
            </div>
        </div>
        <div class="sec5-ba">
            <div class="container">
                <div class="block">
                    <div class="t1">Monthly <br>budget</div>
                    <div class="t2">
                        <div class="tt2">overall: </div>
                        <a class="tag-bl">Meh</a>
                    </div>
                    <div class="t3">
                        Let’s get into this. I’ve always been a huge spender, and I hate maths and I hate counting.
                        This time was even worse because my approach was: I’m gonna spend whatever needs to be spent, to get to
                        my goals as fast as possible. I’ll make my best to break it down for you.
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <th style="border-right: 2px solid #77211E;">Category of stuff</th>
                                <th style="border-left: 2px solid #77211E;">USD</th> 
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #77211E;">housing (electricity, utilities, cleaning incl.)</td>
                                <td>$600</td>
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #77211E;">housing</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #77211E;">housing</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #77211E;">housing</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #77211E;">housing</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="border-left: none; border-bottom: none; border-right: 2px solid #77211E;">Total</td>
                                <td style="border-right: none; border-bottom: none; border-left: 2px solid #77211E;"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="t3">
                        Liquam luctus imperdiet neque in cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                        per inceptos himenaeos. Phasellus quis diam elit. Morbi sit amet lorem vitae lorem viverra efficitur vel ut lorem.
                    </div>
                </div>
                
            </div>
        </div>
        <section class="sec4 sec6-ba">
            <div class="container">
                <div class="b-top">
                    Photo credits: xxxxxx, xxxxxxx, xxxxxx, xxxxxx, xxxxxxx, xxxxxx, xxxxxx, xxxxxxx, xxxxxx, xxxxxx, xxxxxxx, xxxxxx, xxxxxx, xxxxxxx, xxxxxx, 
                </div>
                <div class="block" style="position: relative;">
                    <form action="">         
                        <div class="t1">Once in a while I send hilarious emails with insightful tips. Curious?</div>
                        <div class="container-fs my-form">
                        <?php echo do_shortcode('[contact-form-7 id="2001" title="Newletter Subscription Footer"]'); ?>
                        </div>
                    </form>
                </div>
                <div class="b-bottom">
                    <a href="<?php echo home_url(); ?>/product-page/">
                        <img class="img-course-article" src="<?php echo get_template_directory_uri(); ?>/assets/img/course-block-article.png" alt="">
                    </a>
                    <div class="b-content">
                        <div class="t1">Course you might like:</div>
                        <div class="t2">Branding and strategy workshop: realign your ideas in one day</div>
                    </div>
                </div>
            </div>
        </section>
    
<?php
get_footer('main-f');