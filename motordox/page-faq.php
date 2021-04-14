<?php
get_header();

global $wpdb;

$query = "SELECT * FROM `wp_faq` ORDER BY id ASC";
$faq = $wpdb->get_results($query);
?>

    <main class="wrapper">

        <div class="content">
            <div class="container_faq">
                <h1>FAQ</h1>
                <div class="faq_block">
                    <div class="faq_question">
                        <?php
                        foreach ($faq as $item) :
                        ?>
                        <input type="button" id='faq_question_<?php echo $item->id; ?>' class="question_title" value ="<?php echo $item->question; ?>">
                        <div id="faq_answer_mobile_<?php echo $item->id; ?>" class="faq_answer mobile">
                            <p class="answer_description_<?php echo $item->id; ?>"><?php echo $item->answer; ?></p>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="faq_answer">
                        <h3 class="answer_title"></h3>
                        <p class="answer_description" id="desc_answer"></p>
                    </div>
                </div>
            </div>
            
        </div>

    </main>
    <script>
        "use strict";
        var $ = jQuery;

        if ($(window).width() > 1280){
            $(".question_title").on('click', function () {
                var id = $(this).attr("id");
                id = id.split('_');
                id = id[2];

                var answer = $(".answer_description_"+id+"").text();
                var question = $(this).val();
                $('.answer_title').html(question);
                $('#desc_answer').html(answer);
            });
        }

        if ($(window).width() < 1280) {
            $(".question_title").on('click', function () {
                var id = $(this).attr("id");
                id = id.split('_');
                id = id[2];

                $("#faq_answer_mobile_"+id+"").toggle();
            });
        }
    </script>

<?php
get_footer();