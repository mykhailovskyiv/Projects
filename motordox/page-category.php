<?php
get_header();

$cat = (int)$_GET['id'];

global  $wpdb;
$subCat = '';
$catName = '';

if ($cat != 0 || $cat != ''){
    $query = "SELECT * FROM wp_models WHERE id_cat='$cat'";
    $subCat = $wpdb->get_results($query);
    $q = "SELECT name_cat FROM wp_category WHERE id='$cat'";
    $catName = $wpdb->get_var($q);
}

?>

<main class="wrapper">

    <?php
    if ($cat != 0 || $cat != ''):
    ?>

    <div class="content">
        <div class="catalog-block">
            <div class="breadcrumbs">
                <div class="grey-block"></div>
                <div class="breadcrumbs-main">
                    <label><a href="<?php echo home_url(); ?>">home</a></label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a><?php echo $catName?></a>
                    </label>
                </div>
                <div class="red-block"></div>
            </div>

            <div class="models">
                <div class="categories-models">
                    <?php
                    if (!empty($subCat)):
                    foreach ($subCat as $item):
                        ?>
                        <div class="model">
                            <div class="model-links">
                                <a href="/catalog?id=<?php echo $item->id; ?>"><?php echo $item->name_model; ?></a>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    else:
                        echo 'Sorry, but unfortunately we haven\'t added catalogs to this category yet. Look something in ';
                    ?><a href="/category" style="font-weight: 600; font-size: 20px; color: red; ">other categories</a><?php
                    endif;
                    ?>
                </div>
            </div>
        </div>

    </div>

    <?php
        else:
            ?>
    <div class="content">
        <div class="catalog-block">
            <div class="breadcrumbs">
                <div class="grey-block"></div>
                <div class="breadcrumbs-main">
                    <label><a href="<?php echo home_url(); ?>">home</a></label>
                    <label>
                        <span class="bread">
                            <img src="<?php echo get_template_directory_uri()?>/img/bread.svg" alt="">
                        </span>
                        <a>Category</a>
                    </label>
                </div>
                <div class="red-block"></div>
            </div>

            <div class="models">
                <div class="categories-models">
                    <?php
                    $q = "SELECT * FROM wp_category order by name_cat ASC";
                    $res = $wpdb->get_results($q);
                    $brandArrBukvica = array();
                    foreach ($res as $list){
                        array_push($brandArrBukvica, $list->first_l);
                    }
                    $brandArrBukvica = array_unique($brandArrBukvica);
                    foreach ($brandArrBukvica as $item):
                        ?>
                        <div class="category">
                            <div class="bucvica">
                                <label><?php echo $item; ?></label>
                            </div>
                            <div class="category-links">
                                <?php
                                foreach ($res as $val):
                                    if ($val->first_l == $item):
                                        ?>
                                        <a href="/category?id=<?php echo $val->id; ?>"><?php echo $val->name_cat; ?></a>
                                    <?php
                                    endif;
                                endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
        <?php
        endif;
        ?>

</main>

<?php
get_footer();