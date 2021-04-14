<?php

if (isset($_POST['data'])){
    global $wpdb;

    $private_key = 'jiANLJta7n4eEmcDoUMgQWmEJYi4FiT1DQU73vPq';
    $data = base64_decode($_POST['data']);
    $key = $_POST['signature'];

    $dataParse = json_decode($data);
    $order_id = $dataParse->order_id;
    $status = $dataParse->status;

    $query = "INSERT INTO `payments`(`id_order`,`pay_data`, `status`, `sign`) VALUE ('$order_id','$data', '$status','$key')";
    $wpdb->query($query);

}

$this_order_id = $_COOKIE['id_order'];

$query = "SELECT * FROM payments WHERE id_order='$this_order_id'";
$res = $wpdb->get_row($query);

if ($res){
    if ($res->status == 'success'){
        ?>
        <!DOCTYPE html>
        <html lang="ru">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css"
                  integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w=="
                  crossorigin="anonymous" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
            <title>Numerostar оплата услуг</title>
        </head>

        <body>
        <div style="text-align: center">
            <h2>Благодарю за оплату <br> Всю дальнейшую информацию о марафоне «Сила твоих чисел. Код счастья» ты подучишь в телеграмме. <br> Переходи по ссылке <br><a href="https://t.me/joinchat/AAAAAEhhozl1-Mkk5qARUQ">https://t.me/joinchat/AAAAAEhhozl1-Mkk5qARUQ</a></h2>
        </div>
        </body>
        </html>
<?php
    }
} 