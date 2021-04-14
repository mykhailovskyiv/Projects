<?php

get_header();

if (isset($_POST['delete'])){
    $delName = $_POST['delete'];

    unlink('/home/bald00/motordox.com/www/wp-content/themes/motordox/pdf/'.$delName.'.pdf');
}
?>

    <main class="wrapper">

        <div class="content">
        
        <div class="main-slide">
            <div class="container">

                <form  action="/search" method="post" class="search-block-home">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/short-logo.svg" alt="">
                    <input type="text" name="search" id="home-search">
                    <button>Search <div class="home-search-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/home-search.svg" alt=""></div></button>
                </form>

                <div class="baner">
                    <div class="baner-wrap">
                        <div class="b-wrap-2" onclick="document.location.href = '/category'">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/baner1.svg" alt="">
                            </div>
                            <div>
                                <p>231</p>
                                <p>Brands</p>
                            </div>
                        </div>
                    </div>
                    <div class="baner-wrap">
                        <div class="b-wrap-2" onclick="document.location.href = '/category'">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/baner2.svg" alt="">
                            </div>
                            <div>
                                <p>1 158</p>
                                <p>Manuals</p>
                            </div>
                        </div>
                    </div>
                    <div class="baner-wrap">
                        <div class="b-wrap-2" onclick="document.location.href = '/category'">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/baner3.svg" alt="">
                            </div>
                            <div>
                                <p>2 056</p>
                                <p>Models</p>
                            </div>
                        </div>
                    </div>
                    <div class="baner-wrap">
                        <div class="b-wrap-2" onclick="document.location.href = '/category'">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/baner4.svg" alt="">
                            </div>
                            <div>
                                <p>34G</p>
                                <p>of Data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="figure" id="figure"></div>

            <div class="categories" id="categories">
                <div class="container">

                    <?php
                    global $wpdb;
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

<!--                    --><?php //for ($i = 0; $i<=15; $i++):?>
<!--                    <div class="category">-->
<!--                        <div class="bucvica">-->
<!--                            <label>B</label>-->
<!--                        </div>-->
<!--                        <div class="category-links">-->
<!--                            <a href="/category">Bobcat</a>-->
<!--                            <a href="/category">Bomag</a>-->
<!--                            <a href="/category">Briggs & Stratton</a>-->
<!--                        </div>-->
<!--                    </div>-->
<?php //endfor;?>
                </div>
            </div>

            <div class="about-home" id="about">
                <h2>About Manuals</h2>
                <div class="about-home-info">
                    <p>Since childhood, sculptor Tom Sachs has been building boomboxes. "I hooked my Sony Walkman up to a set of mini speakers and velcroed them to a block of scrap plywood. It was a clusterfuck of wires," he says in the press release for Tom Sachs: Boombox Retrospective 1999–2015, the artist's first-ever exhibition in Texas. </p>
                    <div>
                        <img  class="about-back-img"src="<?php echo get_template_directory_uri(); ?>/img/about-back-three.png" alt="">
                    </div>
                    <div class='icon_pdf__content'>
                        <div class='icon_pdf'> 
                            <p>PARTS CATALOG</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mobile/iconPDF.svg" alt="">
                        </div>
                        <div class='icon_pdf two'> 
                            <p>SERVICE MANUAL</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mobile/iconPDF.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-home">
                <label class="pricing-home-label">Pricing</label>
                <p class="pricing-home-p">By purchasing a subscription for a certain period, you get access to all the documents on the site.</p>
                <div class="pricing-block">
                    <div class="pricing-ins-block">
                        <div class="img-pricing">
                            <div class="price-up-block">
                                subscription:
                            </div>
                            <div>
                                <label class="plan">1 Month</label>
                            </div>
                            <p class="price-p">price:</p>
                            <div>
                                <label class="price">5<span class="dollar">$</span></label>
                            </div>
                        </div>
                        <div>
                            <?php
                            if (is_user_logged_in()){
                                ?>
                            <form action="/payment" method="post">
                                <input type="hidden" name="price-pp" value="5">
                                <button type="submit" class="btn-pricing-pay">Pay subscription</button>
                            </form>
                                <?php
                            } else{
                            ?>
                            <button type="submit" class="btn-pricing-pay" onclick="document.location.href = '/sing-up'">Pay subscription</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="pricing-ins-block">
                        <div class="img-pricing">
                            <div class="price-up-block">
                                subscription:
                            </div>
                            <div>
                                <label class="plan">1 Year</label>
                            </div>
                            <p class="price-p">price:</p>
                            <div>
                                <label class="price">50<span class="dollar">$</span></label>
                            </div>
                        </div>
                        <div>
                            <?php
                            if (is_user_logged_in()){
                                ?>
                            <form action="/payment" method="post">
                                <input type="hidden" name="price-pp" value="50">
                                <button type="submit" class="btn-pricing-pay">Pay subscription</button>
                            </form>
                                <?php
                            } else{
                                ?>
                            <button type="submit" class="btn-pricing-pay" onclick="document.location.href = '/sing-up'">Pay subscription</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>
    <script>
        "use strict";
        var $ = jQuery;

        $(window).scroll(function(){
            var aTop = 1060;
            if($(this).scrollTop()>=aTop){
                var search = $('#home-search').val();
                if (search !== ''){
                    $('#search-input').val(search);
                }
                $('.search-block *').removeClass("search-block-disabled");
            }
        });
    </script>


<?php
get_footer();
