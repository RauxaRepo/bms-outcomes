<?php

/**
 * Register Menus
 */
function outcomes_register_menus()
{
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'navigation-menu' => esc_html__('Navigation Menu', 'Navigation Menu'),
            'resources-menu' => esc_html__('Resources Menu', 'Resources Menu'),
            'main-menu' => esc_html__('Main Menu', 'Main Menu')
        )
    );

}

add_action('after_setup_theme', 'outcomes_register_menus');

/**
 * Add Additional Class on Menu Item
 */
function add_additional_class_on_menu_item($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    if (isset($args->active_class) && in_array('current-menu-item', $classes)) {
        $classes[] = $args->active_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_menu_item', 1, 3);