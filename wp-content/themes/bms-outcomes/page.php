<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bms-outcomes
 */

get_header();

$pageCta = get_field('page_cta');
?>

    <main class="main js-main template-2">
        <?php get_template_part('template-parts/aside'); ?>

        <section class="content">
            <?php get_template_part('template-parts/nav-main-menu') ?>

            <div class="content__container">
                <div class="content__banner">
                    <h3><strong><?= get_field('content_title') ?></strong></h3>
                </div>
                <!-- WYSIWYG -->
                <?= get_field('content_body') ?>
                <!-- WYSIWYG -->

                <?php if (isset($pageCta)) { ?>
                    <!-- floating cta -->
                    <div class="content__floating-cta">
                        <a href="<?= $pageCta['link'] ?>" class="cta"><?= $pageCta['label'] ?></a>
                    </div>
                    <!-- floating cta -->
                <?php } ?>
            </div>

            <?php get_template_part('template-parts/footer'); ?>
        </section>

    </main>
<?php

get_footer();
