<?php
/*
Template Name: Blog
Template Post Type: post, page, product
*/

//

get_header();
?>

        <section class="sec1-b">
            <div class="container">
                <div class="breadcrumbs">
                    <span><a href="">Blog</a></span>
                </div>
            </div>
        </section>
        <section class="sec2-b">
            <div class="container">
                <div class="i1">
                    <div class="left-side">
                        <div class="t1"><?php echo get_cat_name(54);?></div>
                        <div class="t2"><?php echo category_description(54); ?></div>
                    </div>
                    <div class="right-side">
                        <div id="scroller">
                            <ul class="df">
                                <?php $posts = get_posts ("category=54&orderby=date&numberposts=6"); ?> 
                                <?php if ($posts) : ?>
                                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                    <li>
                                        <div class="card-blog">
                                            <div class="banner-block" style="margin-bottom: 20px;">
                                                <div class="img-post-card">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                    <img class="icon-top-left" src="" alt="">
                                                    <a href=""></a>       
                                            </div>
                                            <a class="t1" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
                                            <div class="blog-panel" style="display: flex;">
                                            <div class="tt2"><?php the_date( 'd.m'); ?></div>
                                                <div class="p-tag">
                                                    <?php the_tags( '<ul><li class="tag-btn">','</li><li class="tag-btn">','</li></ul>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="i1">
                    <div class="left-side">
                        <div class="t1"><?php echo get_cat_name(53);?></div>
                        <div class="t2"><?php echo category_description(53); ?></div>
                    </div>
                    <div class="right-side">
                        <div id="scroller">
                            <ul class="df">
                                <?php $posts = get_posts ("category=53&orderby=date&numberposts=6"); ?> 
                                <?php if ($posts) : ?>
                                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                    <li>
                                        <div class="card-blog">
                                            <div class="banner-block" style="margin-bottom: 20px;">
                                                <div class="img-post-card">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                    <img class="icon-top-left" src="" alt="">
                                                    <a href=""></a>       
                                            </div>
                                            <a class="t1" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
                                            <div class="blog-panel" style="display: flex;">
                                            <div class="tt2"><?php the_date( 'd.m'); ?></div>
                                                <div class="p-tag">
                                                    <?php the_tags( '<ul><li class="tag-btn">','</li><li class="tag-btn">','</li></ul>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="i1">
                    <div class="left-side">
                        <div class="t1"><?php echo get_cat_name(52);?></div>
                        <div class="t2"><?php echo category_description(52); ?></div>
                    </div>
                    <div class="right-side">
                        <div id="scroller">
                            <ul class="df">
                                <?php $posts = get_posts ("category=52&orderby=date&numberposts=6"); ?> 
                                <?php if ($posts) : ?>
                                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                                    <li>
                                        <div class="card-blog">
                                            <div class="banner-block" style="margin-bottom: 20px;">
                                                <div class="img-post-card">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                    <img class="icon-top-left" src="" alt="">
                                                    <a href=""></a>       
                                            </div>
                                            <a class="t1" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
                                            <div class="blog-panel" style="display: flex;">
                                            <div class="tt2"><?php the_date( 'd.m'); ?></div>
                                                <div class="p-tag">
                                                    <?php the_tags( '<ul><li class="tag-btn">','</li><li class="tag-btn">','</li></ul>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <div class="block">
                    <form action="">         
                        <div class="t1">Once in a while I send hilarious emails with insightful tips. Curious?</div>
                        <div class="container-fs my-form">
                        <?php echo do_shortcode('[contact-form-7 id="2001" title="Newletter Subscription Footer"]'); ?>
                        </div>
                         
                    </form>
                </div>
            </div>
        </section>

<?php
get_footer('main-f'); ?>