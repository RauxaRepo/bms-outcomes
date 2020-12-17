<?php

/**
 * Theme Supports
 */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );



/**
 * Remove menu from admin
 */
function remove_menus() {
	remove_menu_page('edit.php'); // post
	remove_menu_page('edit-comments.php'); // comments
}

add_action( 'admin_menu', 'remove_menus' );



/**
 * Remove WP Cruft
 */
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'template_redirect', 'rest_output_link_header' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'rel_canonical');
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_resource_hints', 2);
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
 * Google Tag ID
 */
function clg_ga_tracking_id() {
	echo get_field( 'ga_tracking_id', 'options' ); 
}

function clg_gtm_container_id() {
	echo get_field('gtm_container_id', 'options');
}



/**
 * Deeplinking
 * Important - Disable canonical redirection in order to make deeplinking possible
 */
function _disable_canonical_front_page( $redirect ) {
  if ( is_page() && $front_page = get_option( 'page_on_front' ) ) {
    if ( is_page( $front_page ) )
      $redirect = false;
  }

  return $redirect;
}
add_filter( 'redirect_canonical', '_disable_canonical_front_page' );


/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function sk_body_class_for_pages( $classes ) {

    if ( is_singular( 'page' ) ) {
        global $post;
        $classes[] =  $post->post_name . '-page';
    }

    return $classes;

}
add_filter( 'body_class', 'sk_body_class_for_pages' );