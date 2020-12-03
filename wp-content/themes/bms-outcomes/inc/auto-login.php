<?php
/**
 * Auto Login
 */

/**
 * Add BMS Role
 */
add_role('bms', 'BMS', array(
        'read' => true,  // true allows this capability
        'edit_posts' => false,
    )
);

/**
 * Checks to see if current page is the Login Page
 */
if (!function_exists('is_login_page')) {
    function is_login_page()
    {
        return in_array(
            $GLOBALS['pagenow'],
            array('wp-login.php', 'wp-register.php'),
            true
        );
    }
}

/**
 * Auto Login Hook Function
 */
function auto_login()
{
    // Get if restriction is enabled
    $restriction_enabled = get_field('restriction_enabled', 'options');
    if ($restriction_enabled == false) {
        return;
    }

    // If Token is set
    if (isset($_GET['token']) && !is_admin() && !is_login_page()) {

        // Verify Token
        $restriction_token = get_field('restriction_password', 'options');
        if ($_GET['token'] == $restriction_token) {
            // Set authenticated user
            $restriction_user = get_field('restriction_user', 'options');
            wp_set_current_user($restriction_user);
            wp_set_auth_cookie($restriction_user);

            return;
        } else {
            // Log out user if Token is invalid
            wp_logout();
        }

    } else if (is_user_logged_in() || is_admin() || is_login_page()) {
        return;
    }

    /*
     * If not logged into site or Admin area
     * return 404 page
     */
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();

    // TODO 404 Page?
    // include( get_query_template( '404' ) );
    die();
}
add_action('init', 'auto_login');

/**
 * Auth Cookie Expiration
 */
function auth_cookie_expiration_filter_5587($expiration, $user_id, $remember) {
    $user = wp_get_current_user();
    $allowed_roles = array('bms');
    if( array_intersect($allowed_roles, $user->roles ) ) {
        $restriction_expiry = get_field('restriction_expiry', 'options');
        if(isset($restriction_expiry) && is_numeric($restriction_expiry)) {
            $expiration = $restriction_expiry * 3600;

        }
    }
    return $expiration;
}
add_filter('auth_cookie_expiration', 'auth_cookie_expiration_filter_5587', 10, 3);

/**
 * Remove Admin Bar
 *
 * Removed Admin Toolbar for non-Admins
 */
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');