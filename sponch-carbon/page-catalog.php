<?php

get_header();
?>
<main class="wrapper">
    <div class="content">

        <div class="main-catalog">
            <h1>Каталог</h1>

            <div class="menuWrapper">
                <div class="menuLimiter">
                    <menu class="menu-cat">

                        <li class="menu-item">
                            <a class="menu-block-link" id="cases-menu">чехлы</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-block-link" id="hookah-menu">кальян</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-block-link" id="accessories-menu">аксессуары</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-block-link" id="exclusive-menu">эксклюзив</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-block-link" id="forhome-menu">для&nbsp;дома</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-block-link" id="safe-menu">безопасность</a>
                        </li>

                    </menu>
                </div>
            </div>

            <div class="cat-block" id="cases">
                <div class="cat-label-block">
                    <p class="cat-name">Чехлы</p>
                </div>
                <div id='selector_catalog'>
                    <div class="selector">
                        <label for="">Модель</label>
                        <select name="filter-model" id="filter-model">
                            <option value=""></option>
                            <option value="">IPhone 11</option>
                            <option value="">IPhone 11 Pro</option>
                            <option value="">IPhone 11 Max</option>
                        </select>
                    </div>

                    <div class="selector">
                        <label>Тип</label>
                        <select name="filter-type" id="filter-type">
                            <option value="" selected></option>
                            <?php
                            $terms = get_terms( array(
                                'taxonomy' => 'product_cat',
                                'hide_empty' => false,
                                'pad_counts'=> true,
                                'orderby' => 'name',
                                'parent' => 16
                            ) );
                            foreach ($terms as $term) {
                                ?>
                                <option value="<?php echo $term->term_id?>"><?php echo $term->name?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="selector">
                        <label>Колекция</label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">Promo</option>
                            <option value="">Crazy color</option>
                        </select>
                    </div>
                </div>

                <div class="tovar-block">
                    <div class="row">
                        <div class="cat-block case-cat" id="category-page">
                        <?php
                        $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'slug',
                                    'terms' => 'chehly'
                                )
                            ),
                            'post_type' => 'product', // тип товара
                            'orderby' => 'title', // сортировка
                            'order' => 'ASC'
                        );

                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;
                            ?>
                            <div class="tovar">
                                <a href="/product/<?php echo $product->slug?>/">
                                    <?php
                                    $new = get_post_meta($product->id, 'isNew', true);
                                    if ($new == 'true'):
                                        ?>
                                        <div class="tovar-label__new">новинка</div>
                                    <?php endif; ?>
                                    <div class="tov-label">
                                        <label for=""><?php echo $product->name?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php
                                            echo woocommerce_get_product_thumbnail('150');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="tov-price">
                                        <label><?php echo $product->price; ?> <span>RUB</span></label>
                                    </div>
                                </a>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="cat-block" id="hookah">
                <div class="cat-label-block">
                    <p class="cat-name">Кальян</p>
                </div>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 18
                ) );
                ?>
                <div class="tovar-block">
                    <?php if($terms) : ?>
                        <?php foreach($terms as $term) :
                            $products = wc_get_products(array(
                                'category' => array($term->slug),
                            ));

                        if ($products):
                            ?>

                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
<!--                                    <div class="tovar-label__new">новинка</div>-->
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php woocommerce_subcategory_thumbnail( $term );?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        else:
                            ?>
                            <div class="tovar">
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                <div class="center-no-tov">
                                    <label for="">Скоро в продаже!</label>
                                    <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                                    <button onclick="document.location.href='/catalog'">Каталог</button>
                                </div>

                            </div>
                        <?php

                        endif;?>
                        <?php endforeach; ?>
                    <?php
                    else:
                        ?>
                        <div class="center-no-tov">
                            <label for="">Скоро в продаже!</label>
                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                            <button onclick="document.location.href='/catalog'">Каталог</button>
                        </div>
                        <?php
                        ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="cat-block" id="accessories">
                <div class="cat-label-block">
                    <p class="cat-name">Аксессуары</p>
                </div>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 19
                ) );
                ?>
                <div class="tovar-block">
                    <?php if($terms) : ?>
                        <?php foreach($terms as $term) :
                            $products = wc_get_products(array(
                                'category' => array($term->slug),
                            ));

                            if ($products):?>

                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
<!--                                    <div class="tovar-label__new">новинка</div>-->
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php woocommerce_subcategory_thumbnail( $term );?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        else:
                            ?>
                            <div class="tovar">
                                <div class="tov-label">
                                    <label for=""><?php echo $term->name; ?></label>
                                </div>
                                <div class="center-no-tov">
                                    <label for="">Скоро в продаже!</label>
                                    <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                                    <button onclick="document.location.href='/catalog'">Каталог</button>
                                </div>

                            </div>
                            <?php

                        endif;?>
                        <?php endforeach; ?>
                    <?php
                    else:
                        ?>
                        <div class="center-no-tov">
                            <label for="">Скоро в продаже!</label>
                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                            <button onclick="document.location.href='/catalog'">Каталог</button>
                        </div>
                        <?php
                        ?>
                    <?php endif; ?>
                </div>

            </div>

            <div class="cat-block" id="exclusive">
                <div class="cat-label-block">
                    <p class="cat-name">Эксклюзив</p>
                </div>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 20
                ) );
                ?>
                <div class="tovar-block">
                    <?php if($terms) : ?>
                        <?php foreach($terms as $term) :
        $products = wc_get_products(array(
            'category' => array($term->slug),
        ));

    if ($products):?>

                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
<!--                                    <div class="tovar-label__new">новинка</div>-->
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php woocommerce_subcategory_thumbnail( $term );?>
                                        </div>
                                    </div>
                                </a>
                            </div>
    <?php
    else:
        ?>
        <div class="tovar">
            <div class="tov-label">
                <label for=""><?php echo $term->name; ?></label>
            </div>
            <div class="center-no-tov">
                <label for="">Скоро в продаже!</label>
                <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                <button onclick="document.location.href='/catalog'">Каталог</button>
            </div>

        </div>
    <?php

    endif;?>
                        <?php endforeach; ?>
                    <?php
                    else:
                        ?>
                        <div class="center-no-tov">
                            <label for="">Скоро в продаже!</label>
                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                            <button onclick="document.location.href='/catalog'">Каталог</button>
                        </div>
                        <?php
                        ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="cat-block" id="forhome">
                <div class="cat-label-block">
                    <p class="cat-name">Для дома</p>
                </div>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 21
                ) );
                ?>
                <div class="tovar-block">
                    <?php if($terms) : ?>
                        <?php foreach($terms as $term) :
                            $products = wc_get_products(array(
                                'category' => array($term->slug),
                            ));

                            if ($products):
                            ?>

                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
<!--                                    <div class="tovar-label__new">новинка</div>-->
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php woocommerce_subcategory_thumbnail( $term );?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        else:
                            ?>
                            <div class="tovar">
                                <div class="tov-label">
                                    <label for=""><?php echo $term->name; ?></label>
                                </div>
                                <div class="center-no-tov">
                                    <label for="">Скоро в продаже!</label>
                                    <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                                    <button onclick="document.location.href='/catalog'">Каталог</button>
                                </div>

                            </div>
                            <?php

                        endif;?>
                        <?php endforeach; ?>
                    <?php
                    else:
                        ?>
                        <div class="center-no-tov">
                            <label for="">Скоро в продаже!</label>
                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                            <button onclick="document.location.href='/catalog'">Каталог</button>
                        </div>
                        <?php
                        ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="cat-block" id="safe">
                <div class="cat-label-block">
                    <p class="cat-name">Безопасность</p>
                </div>
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 22
                ) );
                ?>
                <div class="tovar-block">
                    <?php if($terms) : ?>
                        <?php foreach($terms as $term) :
        $products = wc_get_products(array(
            'category' => array($term->slug),
        ));

    if ($products):
                            ?>

                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
<!--                                    <div class="tovar-label__new">новинка</div>-->
                                    <div class="tov-label">
                                        <label for=""><?php echo $term->name; ?></label>
                                    </div>
                                    <div class="tov-img">
                                        <div>
                                            <?php woocommerce_subcategory_thumbnail( $term );?>
                                        </div>
                                    </div>
                                </a>
                            </div>
    <?php
    else:
        ?>
        <div class="tovar">
            <div class="tov-label">
                <label for=""><?php echo $term->name; ?></label>
            </div>
            <div class="center-no-tov">
                <label for="">Скоро в продаже!</label>
                <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                <button onclick="document.location.href='/catalog'">Каталог</button>
            </div>

        </div>
    <?php

    endif;?>
                        <?php endforeach; ?>
                    <?php
                    else:
                        ?>
                        <div class="center-no-tov">
                            <label for="">Скоро в продаже!</label>
                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>
                            <button onclick="document.location.href='/catalog'">Каталог</button>
                        </div>
                        <?php
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        "use strict";
        var $ = jQuery;

        $('.menu-block-link').on('click', function () {
            var id = $(this).attr('id');
            id = id.toString();
            id = id.split("-");

            $('.cat-block').css("display", "none");
            $("#"+id[0].toString()).css("display", "flex");
            if (id[0].toString() === 'cases'){
                $('.cat-block.case-cat').css("display", "flex");
            }

        });

        $('.menu-item').on('click', function () {
            $('.menu-item').removeClass('active-menuLimiter');
            $(this).addClass('active-menuLimiter');
        })
    </script>
</main>



<?php

get_footer();