<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bms-outcomes
 */
?>

<input class="js-pdf-viewer-url" type="hidden" value="<?= get_template_directory_uri()?>/scripts/pdfjs/web/viewer.html">

<?php
get_template_part( 'template-parts/options', 'tray' );

get_template_part( 'template-parts/fc', 'modals' );

wp_footer();

get_template_part( 'template-parts/options', 'error-overlay' );
?>

</body>
</html>
