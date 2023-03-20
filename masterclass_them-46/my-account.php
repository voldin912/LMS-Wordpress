<?php
/*
Template Name: my-account
Template Post Type: post, page, product
*/

//

get_header('courses');
?>

        <section class="sec-account">
            <div class="container">
                <div class="t1">My Account</div>
                <div class="info1">
                	<input class="input-subscribe info_item" type="text" id="name" placeholder="Uyen Saint Tran">
                    <input class="input-subscribe info_item" type="email" id="email" placeholder="myeamil@toilet.com">
                </div>
                <div class="t1">Password Change</div>
                <div class="info2">
                <div>
                	<div class="s_label">current password(leave blank to leave unchanged)</div>
                    <input class="input-subscribe info_item" type="password" id="cur_pwd">
                </div>
                <div>
                	<div class="s_label">new password(leave blank to leave unchanged)</div>
                    <input class="input-subscribe info_item" type="password" id="new_pwd">
                </div>
                <div>
                	<div class="s_label">confirm new password</div>
                    <div class="last-info">
                    	<input class="input-subscribe info_item" type="password" id="confirm_pwd">
                        <div class="btn btn-custom my-save-btn">Save</div>
                    </div>
                    
                </div>
                </div>
                
            </div>
        </section>

<?php
get_footer();