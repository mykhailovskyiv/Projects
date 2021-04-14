
<?php if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="content" style="height: auto; padding-top: 100px">

            <h1><?php the_title();?></h1>
                <div class="single-content-terms">
                    <?php
                    the_content();
                    ?>
                </div>

            <?php endwhile; ?>
        </div>

<?php endif; ?>
