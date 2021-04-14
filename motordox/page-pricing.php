<?php
get_header();
?>

<main class="wrapper">

    <div class="content">
        <div class="pricing-page">
            <div class="pricing-home pricing-home-fix">
                <h1 class="pricing-home-label">Pricing</h1>
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
                            <button class="btn-pricing-pay" onclick="document.location.href = '/sing-up'">Pay subscription</button>
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
                            <button class="btn-pricing-pay" onclick="document.location.href = '/sing-up'">Pay subscription</button>
                                <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>
<?php
get_footer();