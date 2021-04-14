<?php
get_header();
?>

    <main class="wrapper">

        <div class="content">
            <div class="login-block">
                <div class="log-in">
                    <div  class="log-label">
                        <label>Reset password</label>
                    </div>
                    <form name="lostpasswordform" id="lostpasswordform" action="<?php echo site_url().'/wp-login.php?action=lostpassword'; ?>" class="log-form" method="post">
                        <label>Email</label>
                        <input type="text" name="user_login" id="user_login" placeholder="Enter your email"/>
                        <input type="hidden" name="redirect_to" value="<?php echo home_url().'/sing-in';?>">
                        <button class="btn-login" type="submit" name="wp-submit" id="wp-submit">Send</button>
                    </form>
                    <div class="label-after-resetpas">
                        <label>An e-mail with password change link will be sent to your mailbox.</label>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php
get_footer();