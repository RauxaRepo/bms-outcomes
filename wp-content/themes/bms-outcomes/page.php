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

get_template_part('template-parts/aside');
?>

    <main class="main js-main">
    <section class="content">
        <?php get_template_part('template-parts/nav-main-menu') ?>

        <?php get_template_part('template-parts/fc', 'flexible-content'); ?>
    </section>

    </main>
<?php

get_footer();
