<?php

/**
 * WP Admin - Posts List Page
 */

// ADD NEW COLUMN
function addColumnsHead($defaults) {
    $defaults['page_template'] = 'Page Template';
    return $defaults;
}
add_filter('manage_pages_columns', 'addColumnsHead');

// SHOW THE FEATURED IMAGE
function getColumnsContent($column_name, $post_ID) {
    if ($column_name == 'page_template') {
        $template = get_post_meta( $post_ID, '_wp_page_template', true );
        $templates = wp_get_theme()->get_page_templates();
        $template_name = $templates[$template];

        echo $template_name;
    }
}
add_action('manage_pages_custom_column', 'getColumnsContent', 10, 2);