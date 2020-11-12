<?php

/**
 * ACF - Options
 */

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Site Options');
    acf_add_options_sub_page('Scripts and Tags');
}
