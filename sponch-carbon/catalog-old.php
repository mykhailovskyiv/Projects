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
                    <!--                <div class="menuWrapper">-->
                    <!--                    <div class="menuLimiter">-->
                    <!--                        <menu class="menu-cat">-->
                    <!--                            <li class="menu-item">-->
                    <!--                                <a href="/product/crazy-color/">-->
                    <!--                                <img src="--><?php //echo get_template_directory_uri()?><!--/img/mobile/col-1.png" alt="" >-->
                    <!--                                    <span>-->
                    <!--                                        “Коллекция Crazy Color”-->
                    <!--                                    </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="menu-item">-->
                    <!--                                <a href="/product/promo/">-->
                    <!--                                <img src="--><?php //echo get_template_directory_uri()?><!--/img/mobile/cases-2.svg" alt="" >-->
                    <!--                                    <span>-->
                    <!--                                        “Коллекция PROMO”-->
                    <!--                                    </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="menu-item">-->
                    <!--                                <a href="/product-category/iphone-11-chehly-dlya-smartfonov">-->
                    <!--                                <img src="--><?php //echo get_template_directory_uri()?><!--/img/mobile/cases-3.svg" alt="" >-->
                    <!--                                     <span>-->
                    <!--                                        “Новая коллекция №3”-->
                    <!--                                    </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="menu-item">-->
                    <!--                                <a href="/product-category/iphone-11-chehly-dlya-smartfonov">-->
                    <!--                                <img src="--><?php //echo get_template_directory_uri()?><!--/img/mobile/cases-4.svg" alt="" >-->
                    <!--                                     <span>-->
                    <!--                                        “Новая коллекция №4”-->
                    <!--                                    </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!---->
                    <!--                        </menu>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <div>
                        <div>
                            <label for="">модель</label>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div>
                            <label>тип</label>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div>
                            <label>колекция</label>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="cat-label-block">
                        <p class="cat-name"><a class="menu-block-link" id="cases-menu">FiberCase (накладки)</a></p>
                        <p class="cat-name not-active"><a class="menu-block-link" id="fiberShell-menu">FiberShell (цельные)</a></p>
                        <p class="cat-name not-active"><a class="menu-block-link" id="softTouch-menu">Fiberskin</a></p>
                    </div>
                    <div class="tovar-block">
                        <div class="row">
                            <div class="cat-block" id="category-page">
                                <?php
                                // Выполнение запроса по категориям и атрибутам
                                $args = array(
                                    // Использование аргумента tax_query для установки параметров терминов таксономии
                                    'tax_query' => array(
                                        // Использование нескольких таксономий требует параметр relation
                                        'relation' => 'AND', // значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
                                        // массив для категории имеющей слаг slug-category-1
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field' => 'slug',
                                            'terms' => 'chehly'
                                        )
                                    ),
                                    // Параметры отображения выведенных товаров
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
                                    <!-- Цикл для вывода выбранных товаров -->
                                    <!--                            <figure class="col-sm-3 product">-->
                                    <!--                                <a href="--><?php //echo get_permalink( $loop->post->ID ) ?><!--">-->
                                    <!--                                    --><?php //woocommerce_show_product_sale_flash( $post, $product ); ?>
                                    <!--                                    --><?php
//                                    if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
//                                    else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="250px" height="250px" />';
//                                    ?>
                                    <!--                                </a>-->
                                    <!--                                <figcaption>-->
                                    <!--                                    <h3 class="product-title">--><?php //the_title(); ?><!--</h3>-->
                                    <!--                                    <div class="product-price">--><?php //echo $product->get_price_html(); ?><!--</div>-->
                                    <!--                                    <div class="text-center">-->
                                    <!--                                        --><?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                                    <!--                                    </div>-->
                                    <!--                                </figcaption>-->
                                    <!--                            </figure>-->

                                <?php endwhile; ?>
                                <!-- Сброс данных запроса -->
                                <?php wp_reset_query(); ?>
                            </div></div>
                        <?php

                        //                    $loop = new WP_Query( array(
                        //                        'post_type' => 'product',  // указываем, что выводить нужно именно товары
                        //                        'orderby' => 'name', // тип сортировки (в данном случае по дате)
                        //                        'product_cat' => 'chehly', // указываем слаг нужной категории
                        //                    ));
                        //                    $terms = get_terms( array(
                        //                        'taxonomy' => 'product_cat',
                        //                        'hide_empty' => false,
                        //                        'pad_counts'=> true,
                        //                        'orderby' => 'name',
                        //                        'parent' => 23
                        //                    ) );
                        ?>
                        <!--                    --><?php //if($terms) : ?>
                        <!--                        --><?php //foreach($terms as $term) : ?>
                        <?php
                        //        $products = wc_get_products(array(
                        //            'category' => array($term->slug),
                        //        ));

                        //    if ($products):

                        //                            $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                        //                            $image        = wp_get_attachment_image_src( $thumbnail_id, array() );
                        //                            $image        = $image[0];
                        ?>
                        <!--                            <div class="tovar"><a href="/product-category/--><?php //echo $term->slug; ?><!--">-->
                        <!--<!--                                    <div class="tovar-label__new">новинка</div>-->-->
                        <!--                                    <div class="tov-label">-->
                        <!--                                        <label for="">--><?php //echo $term->name; ?><!--</label>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="tov-img">-->
                        <!--                                        <div>-->
                        <!--                                            <img src="--><?php //echo $image; ?><!--" alt="">-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </a>-->
                        <!--                            </div>-->
                        <?php
                        //    else:
                        ?>
                        <!--        <div class="tovar">-->
                        <!--            <div class="tov-label">-->
                        <!--                <label for="">--><?php //echo $term->name; ?><!--</label>-->
                        <!--            </div>-->
                        <!--            <div class="center-no-tov">-->
                        <!--                <label for="">Скоро в продаже!</label>-->
                        <!--                <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>-->
                        <!--                <button onclick="document.location.href='/catalog'">Каталог</button>-->
                        <!--            </div>-->
                        <!---->
                        <!--        </div>-->
                        <?php

                        //    endif;?>
                        <!--                        --><?php //endforeach; ?>
                        <?php
                        //                    else:
                        //                        ?>
                        <!--                        <div class="center-no-tov">-->
                        <!--                            <label for="">Скоро в продаже!</label>-->
                        <!--                            <label for="">Пройдите в каталог и посмотрите <br> другие товары</label>-->
                        <!--                            <button onclick="document.location.href='/catalog'">Каталог</button>-->
                        <!--                        </div>-->
                        <!--                        --><?php
                        //                        ?>
                        <!--                    --><?php //endif; ?>
                        <!--                </div>-->
                        <!--            </div>-->

                        <div class="cat-block" id="softTouch" style="display: none;">
                            <div class="menuWrapper">
                                <div class="menuLimiter">
                                    <menu class="menu-cat">
                                        <li class="menu-item">
                                            <a href="/product/crazy-color/">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/col-1.png" alt="" >
                                                <span>
                                        “Коллекция Crazy Color”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product/promo/">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-2.svg" alt="" >
                                                <span>
                                        “Коллекция PROMO”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product-category/iphone-11-chehly-dlya-smartfonov">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-3.svg" alt="" >
                                                <span>
                                        “Новая коллекция №3”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product-category/iphone-11-chehly-dlya-smartfonov">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-4.svg" alt="" >
                                                <span>
                                        “Новая коллекция №4”
                                    </span>
                                            </a>
                                        </li>

                                    </menu>
                                </div>
                            </div>
                            <div class="cat-label-block">
                                <p class="cat-name not-active "><a class="menu-block-link" id="cases-menu">FiberCase (накладки)</a></p>
                                <p class="cat-name not-active"><a class="menu-block-link" id="fiberShell-menu">FiberShell (цельные)</a></p>
                                <p class="cat-name "><a class="menu-block-link" id="softTouch-menu">Fiberskin</a></p>
                            </div>
                            <div class="tovar-block">
                                <?php
                                $terms = get_terms( array(
                                    'taxonomy' => 'product_cat',
                                    'hide_empty' => false,
                                    'pad_counts'=> true,
                                    'orderby' => 'name',
                                    'parent' => 50
                                ) );
                                ?>
                                <?php if($terms) : ?>
                                    <?php foreach($terms as $term) :
                                        $products = wc_get_products(array(
                                            'category' => array($term->slug),
                                        ));

                                        if ($products):
                                            $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                                            $image        = wp_get_attachment_image_src( $thumbnail_id, array() );
                                            $image        = $image[0];
                                            ?>

                                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
                                                    <!--                                        <div class="tovar-label__new">новинка</div>-->
                                                    <div class="tov-label">
                                                        <label for=""><?php echo $term->name; ?></label>
                                                    </div>
                                                    <div class="tov-img">
                                                        <div>
                                                            <img src="<?php echo $image; ?>" alt="">
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

                        <div class="cat-block" id="fiberShell" style="display: none">
                            <div class="menuWrapper">
                                <div class="menuLimiter">
                                    <menu class="menu-cat">
                                        <li class="menu-item">
                                            <a href="/product/crazy-color/">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/col-1.png" alt="" >
                                                <span>
                                        “Коллекция Crazy Color”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product/promo/">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-2.svg" alt="" >
                                                <span>
                                        “Коллекция PROMO”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product-category/iphone-11-chehly-dlya-smartfonov">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-3.svg" alt="" >
                                                <span>
                                        “Новая коллекция №3”
                                    </span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/product-category/iphone-11-chehly-dlya-smartfonov">
                                                <img src="<?php echo get_template_directory_uri()?>/img/mobile/cases-4.svg" alt="" >
                                                <span>
                                        “Новая коллекция №4”
                                    </span>
                                            </a>
                                        </li>

                                    </menu>
                                </div>
                            </div>
                            <div class="cat-label-block">
                                <p class="cat-name not-active "><a class="menu-block-link" id="cases-menu">FiberCase (накладки)</a></p>
                                <p class="cat-name "><a class="menu-block-link" id="fiberShell-menu">FiberShell (цельные)</a></p>
                                <p class="cat-name not-active"><a class="menu-block-link" id="softTouch-menu">Fiberskin</a></p>
                            </div>
                            <div class="tovar-block">
                                <?php
                                $terms = get_terms( array(
                                    'taxonomy' => 'product_cat',
                                    'hide_empty' => false,
                                    'pad_counts'=> true,
                                    'orderby' => 'name',
                                    'parent' => 17
                                ) );
                                ?>
                                <?php if($terms) : ?>
                                    <?php foreach($terms as $term) :
                                        $products = wc_get_products(array(
                                            'category' => array($term->slug),
                                        ));

                                        if ($products):

                                            $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                                            $image        = wp_get_attachment_image_src( $thumbnail_id, array() );
                                            $image        = $image[0];
                                            ?>

                                            <div class="tovar"><a href="/product-category/<?php echo $term->slug; ?>">
                                                    <!--                                    <div class="tovar-label__new">новинка</div>-->
                                                    <div class="tov-label">
                                                        <label for=""><?php echo $term->name; ?></label>
                                                    </div>
                                                    <div class="tov-img">
                                                        <div>
                                                            <img src="<?php echo $image; ?>" alt="">
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


                    });

                    // $('.menu-item').on('click', function () {
                    //     $('.menu-item').removeClass('active-menuLimiter');
                    //     $(this).addClass('active-menuLimiter');
                    // })
                </script>
    </main>



<?php

get_footer();