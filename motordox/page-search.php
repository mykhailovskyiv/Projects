<?php
get_header();

?>
    <style>
        .search-page{
            padding-top: 83px;
            min-height: 700px;
            max-width: 1264px;
            margin: 0 auto;
        }
        .search-res-label{
            font-size: 24px;
            font-weight: 600;
            margin: 40px 0 15px 0;
        }
        .fix-for-s{
            width: max-content;
        }
        .search-pdf a{
            font-style: normal;
            font-weight: 600;
            font-size: 26px;
            line-height: 34px;
            cursor: pointer;
            margin-left: 22px;
            padding: 11px 19px;
        }
    </style>
<main class="wrapper">

    <div class="content">
        <div class="search-page">
        <?php
        global $wpdb;

        if (isset($_POST['search'])){
            $search = $_POST['search'];

            $query = "SELECT * FROM `wp_models` WHERE name_model LIKE '%$search%' ORDER BY name_model ASC";
            $models = $wpdb->get_results($query);

            $query = "SELECT * FROM `wp_documents` WHERE name_doc LIKE '%$search%' ORDER BY name_doc ASC";
            $docs = $wpdb->get_results($query);

            ?>
            <h1>Search result by "<?php echo $search;?>":</h1>
            <div>

                <div>
            <p class="search-res-label">Models</p>
                    <?php
                    if (!empty($models)):
                        foreach ($models as $model):
                    ?>

                        <div class="model-links fix-for-s">
                            <a href="/catalog?id=<?php echo $model->id; ?>"><?php echo $model->name_model; ?></a>
                        </div>
                            <?php
                        endforeach;
                        else:
                        ?>
                            <p>No catalogs found!</p>
                        <?php
                    endif;
                    ?>
                </div>

                <div>
                    <p class="search-res-label">Documents</p>
                    <?php
                    if (!empty($docs)):
                        foreach ($docs as $doc):
                    ?>
                    <div class="search-pdf fix-for-s">
                        <a href="/viewing" class="pdf-ico" id=""><img src="http://motordox.com/wp-content/themes/motordox/img/pdf-ico.svg" alt=""> Bobcat 546</a>
                    </div>
                    <?php
                        endforeach;
                        else:
                            ?>
                            <p>No documents found!</p>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</main>

<?php
get_footer();