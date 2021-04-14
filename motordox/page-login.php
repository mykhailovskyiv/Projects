<?php
get_header();

?>

<main class="wrapper">

    <div class="content">
    <div class="login-block">
        <div class="log-in">
            <div  class="log-label">
                <label>Log in</label>
            </div>
            <form class="log-form" name="loginform" id="loginform" action="<?php bloginfo('url') ?>/wp-login.php" method="post">
                <label>Email</label>
                <input type="text" name="log" id="user_login" placeholder="Enter your email"/>
                <label>Password</label>
                <input type="password" name="pwd" id="user_pass" placeholder="Enter your password"/>
                <button class="btn-login" type="submit" name="wp-submit" id="wp-submit">Log in</button>
                <input type="hidden" name="redirect_to" value="<?php echo home_url();?>" />
                <input type="hidden" name="testcookie" value="1" />
                <div class="res-singup">
                    <label class="label-respass"><a href="/reset-password">Reset password</a></label>
                    <label class="label-singup"><a href="/sing-up">Sing up</a></label>
                </div>
            </form>
        </div>
    </div>
    </div>

</main>
<?php

get_footer();