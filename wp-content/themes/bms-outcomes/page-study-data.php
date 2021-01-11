<?php
/* Template Name: Study Data Page */

get_header();

$aside = get_field('aside_content');
$asideCta = get_field('aside_start_date_cta', 'options');
$asideLinks = get_field('aside_links');
$pageContent = get_field('page_content');
$pageCta = get_field('page_cta');
?>
    <div class="template-2 study-page">
        <main class="main js-main">
            <aside class="aside">
                <div class="aside__container">
                    <div class="aside__banner">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/avatar.png" alt="">
                        <span><?= $aside['title'] ?></span>
                    </div>
                    <h6><strong class="text-yellow"><?= $aside['start_label'] ?>:</strong></h6>
                    <h4 class="js-print-therapy-start">&nbsp;</h4>
                    <h6><strong class="text-yellow"><?= $aside['progression_label'] ?>:</strong></h6>
                    <h4 class="js-print-prog-end">&nbsp;</h4>
                    <a class="aside__banner aside__banner--modal" href="<?= $asideCta['link'] ?>">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/external.png" alt="">
                        <span><?= $asideCta['label'] ?></span>
                    </a>

                    <?php if (!empty($asideLinks)) { ?>
                        <ul class="aside__list">
                            <?php foreach ($asideLinks as $aLink) { ?>
                                <li>
                                    <a href="<?= $aLink['link'] ?>"><?= $aLink['label'] ?></a>
                                </li>
                            <?php }
                            ?>
                        </ul>
                    <?php } ?>
                    <button class="aside__scroll js-scroll">
                        <span class="aside__scroll-icon"></span>
                        <?= $aside['scroll_label'] ?>
                    </button>
                    <div class="aside__footer">
                        <div class="aside__logo">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </aside>

            <section class="content">
                <?php get_template_part('template-parts/nav-main-menu') ?>

                <div class="content__container">
                    <div class="content__banner">
                        <small><?= $pageContent['tagline'] ?></small>
                        <h3><?= $pageContent['headline'] ?> <u><strong><span class="js-print-prog-end-alt"></span></strong></u></h3>
                    </div>
                    <!-- WYSIWYG -->
                    <?= $pageContent['content'] ?>
                    <!-- WYSIWYG -->
                    <!-- floating cta -->
                    <div class="content__floating-cta">
                        <a href="<?= $pageCta['link'] ?>" class="cta"><?= $pageCta['label'] ?></a>
                    </div>
                    <!-- floating cta -->
                </div>
                <?php get_template_part('template-parts/footer'); ?>
            </section>
        </main>
    </div>
<?php

get_footer();
