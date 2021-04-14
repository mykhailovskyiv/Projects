<?php
if (!empty($_COOKIE['data'])):
    $data = $_COOKIE['data'];
    setcookie("data", "", time() - 3600);
endif;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/mainlogo.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <title>Numerostar психоматрица</title>
</head>

<body>
<header id='header'>
        <div class="logo" onclick="location.href='/home';">
            <img src="<?php echo get_template_directory_uri()?>/img/mainlogo.svg" alt="">
        </div>
</header>
<style>
    .greyGridTable tr:nth-child(5) td:nth-child(1){
        background-color: #dbd2c7 !important;
        border: 1px #dbd2c7 solid;
        border-right: 1px solid black;
    }
</style>
<div style="width: 100%; padding-top: 100px">

    <?php
    echo file_get_contents('http://best.numerolog.tilda.ws/');
    ?>

</div>
<div id="description">
 <?php
    global $wpdb;

    $data = explode('/', $data);

    for ($i = 0; $i<=8; $i++){
        $num = $data[$i];
        if ($data[$i] == '-'){
            $num = ($i+1).'-';
        }

        $query = "SELECT * FROM `matrix` WHERE figures='$num'";
        $res = $wpdb->get_row($query);
        echo '<div id="descr-'.$i.'" class="descr">';
        echo '<p class="figure">'.$num.'</p>';
        echo '<p class="text">'.$res->text.'</p></div>';
    }


    ?>
</div>
</body>
<script>
    "use strict";
       var $ = jQuery;
       $('.calc').on('click', function () {
           setTimeout(function () {
               var matrix = $('#matrix_text').val();

               document.cookie = "data="+matrix;
               $('#description').load('/matrix #description > *');
           }, 500);

       })
</script>
</html>