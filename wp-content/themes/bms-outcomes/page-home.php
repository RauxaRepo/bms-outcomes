<?php

/* Template Name: Home Page */

get_header();
?>
    <section class="content">

        <?php get_template_part( 'template-parts/fc', 'indication' ); ?>

        <div class="content__container">
            <h1><?= get_field('title') ?></h1>
            <h5><?= get_field('subtitle') ?></h5>
        </div>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__logo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
                </div>
                <div class="footer__content">
                    <?= get_field('content_copy') ?>
                </div>
            </div>
        </footer>
    </section>
    <aside class="aside">
        <div class="aside__container">
            <a href="<?= get_field('cta_link') ?>" class="cta">
                <?= get_field('cta_label') ?>
            </a>
        </div>
    </aside>

<?php
get_footer();