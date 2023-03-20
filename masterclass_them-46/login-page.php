<?php
/*
Template Name: login
Template Post Type: post, page, product
*/

//

get_header('main-header');
?>

        <section class="sec1-log">
            <div class="container">
                <div class="block">
                    <div class="b-login">
                        <div class="t1">Login</div>
                        <div>
                            <input type="email" id="myemail" class="input-subscribe login-input" style="margin-top: 17px;" placeholder="youremail@toilet.com">
                        </div>
                        <div>
                            <input type="password" id="mypassword" class="input-subscribe login-input" placeholder="password">
                        </div>
                        <div class=mycheckbox>
                            <input type="checkbox" id="Option">
                            <label class="white-checkbox" for="Option">
                                <span style="text-indent:15px">Remember me</span>
                            </label>
                        </div>
                        <div id="login-submit" class="submit_btn my-login-btn">
                            <input type="submit" value="">
                            <img class="btn-arrow" src="https://sainttran.com/wp-content/themes/masterclass_them/assets/img/right-arrow-br.png" alt="">
                        </div>
                        <a class="" href="#">I completely forgot my account or password</a>
                    </div>
                    <div class="t2">Members area</div>
                    <img class="login-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bg-login.png" alt="">
                </div>
            </div>
        </section>
    
<?php
get_footer('main-f');
?>