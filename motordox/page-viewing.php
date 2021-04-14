<?php
get_header();

$docID = (int)$_GET['id'];

if ($docID && !empty($docID) && $docID != ''):
global $wpdb;
$query = "SELECT * FROM `wp_documents` WHERE id='$docID'";
$document = $wpdb->get_row($query);

$q = "SELECT name_cat FROM wp_category WHERE id='$document->id_cat'";
$catName = $wpdb->get_var($q);
$q = "SELECT name_model FROM wp_models WHERE id='$document->id_model'";
$subCatName = $wpdb->get_var($q);

?>

<main class="wrapper">

    <div class="content">
        <div class="pdf-viewing">
            <div class="breadcrumbs">
                <div class="grey-block"></div>
                <div class="breadcrumbs-main">
                    <label><a href="<?php echo home_url(); ?>">home</a></label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a href="/category?id=<?php echo $document->id_cat?>"><?php echo $catName; ?></a>
                    </label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a href="/catalog?id=<?php echo $document->id_model?>"><?php echo $subCatName?></a>
                    </label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a><?php echo $document->name_doc;?></a>
                    </label>
                </div>
                <div class="red-block"></div>
            </div>

            <div class="pdf-block">

                <?php
                global $wpdb;

                $UID = get_current_user_id();
                $query = "SELECT status FROM `wp_subscriptions` WHERE id_user='$UID'";
                $status = $wpdb->get_var($query);


                ?>

                <input type="hidden" id="isBuy" value="<?php if ($status && $status == 1){ echo 1;} else echo 0; ?>">
                <input type="hidden" id="pages" value="">
                <?php

                $conn_id = ftp_connect('magnis.ddns.net');
                ftp_login($conn_id, '_2UN6hbY9', 'kcT7NJpH');
                ftp_pasv($conn_id, true);
                $h = fopen('php://temp', 'r+');


                $adr = str_replace('ftp://magnis.ddns.net','', $document->href);
                ftp_fget($conn_id, $h, $adr, FTP_BINARY, 0);

                $fstats = fstat($h);
                fseek($h, 0);
                $contents = fread($h, $fstats['size']);

                $temp = rand(23452,34237852321321699);

                $file = '/home/bald00/motordox.com/www/wp-content/themes/motordox'.DIRECTORY_SEPARATOR.'pdf'.DIRECTORY_SEPARATOR.$temp.'.pdf';
                $pdf = fopen ($file,'w');
                fwrite ($pdf,$contents);
                fclose ($pdf);

                fclose($h);
                ftp_close($conn_id);

                echo do_shortcode('[pdf-embedder url="/wp-content/themes/motordox/pdf/'.$temp.'.pdf" width="500"]');

                ?>

            </div>
        </div>
    </div>

    

    <div class="modal-buy">
        <div class="modal-block">
            <p class="btn-close">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15.5564" width="2" height="22" transform="rotate(45 15.5564 0)" fill="black"/>
                    <rect x="16.9705" y="15.5566" width="2" height="22" transform="rotate(135 16.9705 15.5566)" fill="black"/>
                </svg>
            </p>
            <div class="modal-text">
                <p>Register and subscribe for access please.</p>
                <button onclick="document.location.href = '/pricing'">Subscribe</button>
            </div>
        </div>
    </div>
</main>

<?php
    else:
        echo '<script>document.location.href = "/";</script>';
        endif;
        ?>

    <script>
        "use strict";
        var $ = jQuery;

        var buy = $('#isBuy').val();
        // if (buy === '0'){
        //     setTimeout(function () {
        //         $('.modal-buy').css("display", "block");
        //     }, 15000);
        // }


        $('.btn-close svg').on('click', function () {
            $('.modal-buy').css("display", "none");
        });

        $(window).on('load', function(){

            setTimeout(function () {
                var tango = '<?php echo $temp; ?>';
                $.post(
                    '/',
                    {
                        'delete':tango
                    }
                );
            }, 40000);

        });
    </script>
<!--    <script type="text/javascript">-->
<!--        window.addEventListener('beforeunload', function (e) {-->
<!--            e.preventDefault();-->
<!--            e.returnValue = '';-->
<!--        });-->
<!--    </script>-->


    <!-- <script type="text/javascript">
        $("body").on("contextmenu", false);
    </script> -->


    <!-- <script type="text/javascript">
        document.onkeydown = function(e) {
            if(event.keyCode === 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode === 'I'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode === 'J'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.keyCode === 'U'.charCodeAt(0)){
                return false;
            }
            if (e.metaKey && e.keyCode === 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.metaKey && e.altKey && e.keyCode === 'U'.charCodeAt(0)){
                return false;
            }
        }
    </script> -->
<?php
get_footer();