<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bms-outcomes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <?php get_template_part('template-parts/gtm-head'); ?>
    <?php get_template_part('template-parts/ga'); ?>
</head>

<body <?= body_class('js-body') ?>>
<?php get_template_part('template-parts/gtm-iframe'); ?>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/header'); ?>
