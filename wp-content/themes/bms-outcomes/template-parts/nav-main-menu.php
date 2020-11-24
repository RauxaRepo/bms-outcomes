<?php
if ( has_nav_menu( 'main-menu' ) ) { /* if menu location 'main-menu' exists then use custom menu */

    wp_nav_menu( array(
        'theme_location' => 'main-menu',
        'menu_id'        => 'main-menu',
    ) );
}