<?php

/**
 * Register Menus
 */
function outcomes_register_menus() {

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'navigation-menu' => esc_html__( 'Navigation Menu', 'Navigation Menu' ),
            'resources-menu' => esc_html__('Resources Menu', 'Resources Menu'),
            'main-menu' => esc_html__('Main Menu', 'Main Menu')
        )
    );

}

add_action( 'after_setup_theme', 'outcomes_register_menus' );


