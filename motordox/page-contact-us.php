<?php
get_header();


if (isset($_POST['contact'])){
    //
}

?>

    <main class="wrapper">

        <div class="content">
            <div class="login-block">
                <div class="log-in">
                    <div  class="log-label">
                        <label>Contact us</label>
                    </div>
                    <div class="log-form" id="contact">
                        <label>Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter your name"/>
                        <label>Email</label>
                        <input type="text" name="user_email" id="user_email" placeholder="Enter your email"/>
                        <label>Your comment</label>
                        <textarea type="text" name="user_comment" id="user_comment" placeholder="Write your comment"></textarea>
                        <button class="btn-login" type="submit" name="contact">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-ok">
            <div class="modal-ok-body">
                <button class="close-popup">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="15.5564" width="2" height="22" transform="rotate(45 15.5564 0)" fill="black"/>
                        <rect x="16.9705" y="15.5566" width="2" height="22" transform="rotate(135 16.9705 15.5566)" fill="black"/>
                    </svg>
                </button>
                <label class="modal-label">Your message send. Our manager will contact with you soon</label>
            </div>
        </div>
    </main>
    <script>
        "use strict";
        var $ = jQuery;

        $('.btn-login').on('click', function () {

            $.post(
                '',
                {
                    'contact': ''
                },
                function () {
                    $('.popup-ok').css("display", "block");
                }
            );
        });

        $('.close-popup').on('click', function () {
            $('.popup-ok').css("display", "none");
        })
    </script>
<?php
get_footer();