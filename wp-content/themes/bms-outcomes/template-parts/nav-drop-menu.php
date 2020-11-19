<?php
if ( has_nav_menu( 'resources-menu' ) ) { /* if menu location 'resources-menu' exists then use custom menu */
    echo "Resources";
    wp_nav_menu( array(
        'theme_location' => 'resources-menu',
        'menu_id'        => 'resources-menu',
    ) );
}

if ( has_nav_menu( 'navigation-menu' ) ) { /* if menu location 'navigation-menu' exists then use custom menu */
    echo "Navigation";
    wp_nav_menu( array(
        'theme_location' => 'navigation-menu',
        'menu_id'        => 'navigation-menu',
    ) );
}