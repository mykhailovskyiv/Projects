<?php


if (isset($_POST['create_user'])){
    $name = $_POST['user_name'];
    $mail = $_POST['user_email'];

    $user_id = username_exists( $name );
    $pass = $_POST['user_pass'];
    if ( ! $user_id && email_exists( $mail ) == false ) {
        $newUser = wp_create_user($name , $pass, $mail);
    } else {
        return false;
    }
    if ($newUser){
        $u = new WP_User( $newUser );
        update_user_meta($u->ID, 'first_name', $name);

        echo '<script>alert("You successfully registered!"); document.location.href = "/login";</script>';
    }
}
get_header();
?>

    <main class="wrapper">

        <div class="content">
            <div class="login-block">
                <div class="log-in">
                    <div  class="log-label">
                        <label>Sing up</label>
                    </div>
                    <form class="log-form" id="register" method="post">
                        <label>Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter your name"/>
                        <label>Email</label>
                        <input type="text" name="user_email" id="user_email" placeholder="Enter your email"/>
                        <label>Password</label>
                        <input type="text" name="user_pass" id="user_pass" placeholder="Create password"/>
                        <label>Repeat password</label>
                        <input type="text" name="pass_repeat" id="pass_repeat" placeholder="Repeat password">
                        <button class="btn-login" type="submit" name="create_user">Register</button>
                        <div class="to-login">
                            <label class="label-to-login">Already have account? <span onclick="document.location.href = '/login'" style="cursor: pointer; font-weight: 600;">Log In</span></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
<?php
get_footer();