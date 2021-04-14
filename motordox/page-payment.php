<?php
get_header();

$price = 0;
$period = '';
if (isset($_POST['price-pp'])){
    $price = $_POST['price-pp'];
    if ($price == 5){
        $period = 'month';
    } else $period = 'year';
}


if (isset($_POST['buyAccount'])){
    global $wpdb;
    $price = $_POST['price'];
    $userID = $_POST['user'];

    if ($price == 5){
        $month = 1;
    } else
    {
        $month = 12;
    }
    $user = get_user_meta($userID);
    $name = $user['first_name'][0].' '.$user['last_name'][0];
    $mail = get_userdata($userID);
    $mail = $mail->user_email;
    $today = new DateTime();
    $date_to =$today->modify("+ ".$month." month");
    $date_to = $date_to->format('Y-m-d H:m:s');

    $query = "INSERT INTO `wp_subscriptions`(`month`, `price`, `id_user`, `date_to`, `user_name`, `user_mail`, `method`, `status`) VALUES ('$month', '$price', '$userID', '$date_to','$name', '$mail', 'PayPal', 1)";
    $wpdb->query($query);
}

?>

<main class="wrapper">

    <div class="content">

        <div class="modal-buy-plan" style="padding-top: 400px">
            <div class="modal-block">
                <div class="modal-text" style="transform: translate(-50%, -50%);">
                    <p>You have chosen a plan for 1 <?php echo $period; ?>, please choose a convenient payment method below.</p>
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>

                    <!-- Include the PayPal JavaScript SDK -->
                    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

                    <script>

                        var price = '<?php echo $price; ?>';
                        var user = '<?php echo get_current_user_id()?>';

                        // Render the PayPal button into #paypal-button-container
                        paypal.Buttons({

                            // Set up the transaction
                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: price
                                        }
                                    }]
                                });
                            },

                            // Finalize the transaction
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {

                                    $.post(
                                        '',
                                        {
                                            'buyAccount' : '',
                                            'price' :price,
                                            'user' : user
                                        }
                                    );

                                    // Show a success message to the buyer
                                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                    $('#modal-pay-good').css("display", "block");
                                    setTimeout(function(){ document.location.href = "/account"; }, 5000);
                                });
                            }


                        }).render('#paypal-button-container');
                    </script>
                </div>
            </div>
        </div>

    </div>

</main>
<div id="modal-pay-good">
    <div class="modal-block">
        <p class="btn-close">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15.5564" width="2" height="22" transform="rotate(45 15.5564 0)" fill="black"/>
                <rect x="16.9705" y="15.5566" width="2" height="22" transform="rotate(135 16.9705 15.5566)" fill="black"/>
            </svg>
        </p>
        <div class="modal-text">
            <p>Thank you for subscribing, you will automatically be redirected to your account.</p>
            <button onclick="document.location.href = '/account'">Account</button>
        </div>
    </div>
</div>
    <script>
        $('.btn-close svg').on('click', function () {
            $('.modal-pay-good').css("display", "none");
        })
    </script>
<?php
get_footer();