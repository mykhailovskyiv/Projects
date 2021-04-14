<?php
get_header();
?>

    <main class="wrapper">

        <div class="content">
            <div class="l-n-wrap">
                <?php

                while( have_posts() ) : the_post();
                    $more = 1; // отображаем полностью всё содержимое поста

                    ?>
                <h1><?php the_title()?></h1>
                <div class="text-block">
                    <?php
                    the_content();
                    ?>
                </div>
                    <?php

                endwhile;

                ?>
            </div>

        </div>

    </main>
<?php
get_footer();