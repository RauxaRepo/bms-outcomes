<?php
/**
 * Header
 */
    $header = get_field('header', 'options');

?>
<header class="header js-header" role="banner">
    <div class="container header__container">
        <div class="header__block">
            <div class="header__logo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
            </div>
            <button type="button" class="js-drawer-toggle drawer__hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer__hamburger-icon"></span>
            </button>
        </div>
    </div>
    <nav class="drawer__nav js-drawer-nav" role="navigation">
        <div class="drawer__menu container">
            <div class="drawer__grid">
                <div class="drawer__col drawer__col--brand">
                    <h2><?= $header['navigation_headline'] ?></h2>
                </div>

                <?php
                // Resources Menu
                /* if menu location 'resources-menu' exists then use custom menu */
                if (has_nav_menu('resources-menu')) { ?>
                    <div class="drawer__col drawer__col--resources">
                        <h5><?= wp_get_nav_menu_name('resources-menu') ?></h5>
                        <hr/>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'resources-menu',
                            'menu_id' => 'resources-menu',
                        ));

                        ?>
                    </div>
                <?php } // End Resources Menu?>

                <?php
                // Navigation Menu
                /* if menu location 'navigation-menu' exists then use custom menu */
                if (has_nav_menu('navigation-menu')) { ?>
                    <div class="drawer__col drawer__col--navigation">
                        <h5><?= wp_get_nav_menu_name('navigation-menu') ?></h5>
                        <hr/>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'navigation-menu',
                            'menu_id' => 'navigation-menu',
                        ));

                        ?>
                    </div>
                <?php } // End Navigation Menu ?>

                <div class="drawer__col drawer__col--footer">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
                </div>
            </div>
        </div>
    </nav>
</header>