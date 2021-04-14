<?php
get_header();

$subCat = (int)$_GET['id'];
global  $wpdb;
$cat = '';
$catName = '';
$docs = '';
$subCatName = '';

if ($subCat != 0 || $subCat != ''){
    $q = "SELECT * FROM wp_documents WHERE id_model='$subCat'";
    $docs = $wpdb->get_results($q);
    $q = "SELECT id_cat FROM wp_documents WHERE id_model='$subCat' LIMIT 1";
    $cat = $wpdb->get_var($q);
    $q = "SELECT name_cat FROM wp_category WHERE id='$cat'";
    $catName = $wpdb->get_var($q);
    $q = "SELECT name_model FROM wp_models WHERE id='$subCat'";
    $subCatName = $wpdb->get_var($q);

    $q = "SELECT * FROM wp_documents WHERE id_model='$subCat' AND type_doc=0";
    $partsDocs =$wpdb->get_results($q);
    $q = "SELECT * FROM wp_documents WHERE id_model='$subCat' AND type_doc=1";
    $serviceDocs = $wpdb->get_results($q);
}
?>

<main class="wrapper">

    <div class="content">
        <div class="catalogs">
            <?php
            if (!empty($docs)):
            ?>
            <div class="breadcrumbs">
                <div class="grey-block"></div>
                <div class="breadcrumbs-main">
                    <label><a href="<?php echo home_url(); ?>">home</a></label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a href="/category?id=<?php echo $cat?>"><?php echo $catName; ?></a>
                    </label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a><?php echo $subCatName?></a>
                    </label>
                </div>
                <div class="red-block"></div>
            </div>


            <div class="catalogs-lists">
                <?php
                if (!empty($partsDocs)):
                ?>
                <div class="parts-catalog">
                    <div class="cat-block-label" id="parts-catalog">
                        <div class="label-parts-cat">
                            <img src="<?php echo get_template_directory_uri()?>/img/parts-ico.svg" alt="">
                            <label>Parts catalog</label>
                        </div>
                        <div class="red-arrow" id="parts-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/red-arrow.svg" alt="">
                        </div>
                    </div>
                    <div class="list-pdf" id="parts-pdf">
                        <?php
                        foreach ($partsDocs as $partsDoc):
                        ?>
                        <a href="/viewing?id=<?php echo $partsDoc->id;?>" class="pdf-ico" id=""><img src="<?php echo get_template_directory_uri()?>/img/pdf-ico.svg" alt=""> <?php echo $partsDoc->name_doc ?></a>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <?php
                endif;

                if (!empty($serviceDocs)):
                ?>
                <div class="service-manual">
                    <div class="cat-block-label" id="service-manual">
                        <div class="label-parts-cat">
                            <img src="<?php echo get_template_directory_uri()?>/img/service-ico.svg" alt="">
                            <label>Service manual</label>
                        </div>
                        <div class="red-arrow" id="service-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/red-arrow.svg" alt="">
                        </div>
                    </div>
                    <div class="list-pdf" id="service-pdf">
                        <?php
                        foreach ($serviceDocs as $serviceDoc):
                        ?>
                        <a href="/viewing?id=<?php echo $serviceDoc->id;?>" class="pdf-ico" id=""><img src="<?php echo get_template_directory_uri()?>/img/pdf-ico.svg" alt=""> <?php echo $serviceDoc->name_doc?></a>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </div>
            <?php
            else:
                echo 'Sorry, but unfortunately we haven\'t added catalogs to this category yet. Look something in ';
            ?>
                <a href="/category" style="font-weight: 600; font-size: 20px; color: red; ">other categories</a>
            <?php
            endif;
            ?>
        </div>

    </div>

    <script>
        "use strict";
        var $ = jQuery;

        $('#parts-catalog').on('click', function () {
            var visible = $('#parts-pdf').css("display");
            if (visible === 'none'){
                $('#parts-arrow').addClass("red-arrow-reverse");
                $('#parts-pdf').css("display", "grid");
            }
            if (visible === 'grid'){
                $('#parts-arrow').removeClass("red-arrow-reverse");
                $('#parts-pdf').css("display", "none");
            }
        });

        $('#service-manual'). on('click', function () {
            var visible = $('#service-pdf').css("display");
            if (visible === 'none'){
                $('#service-arrow').addClass("red-arrow-reverse");
                $('#service-pdf').css("display", "grid");
            }
            if (visible === 'grid'){
                $('#service-arrow').removeClass("red-arrow-reverse");
                $('#service-pdf').css("display", "none");
            }
        });
    </script>

</main>

<?php
get_footer();