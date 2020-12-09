<?php
/**
 * Page Modals
 */

if (have_rows('page_modals')) {
    while (have_rows('page_modals')) {
        the_row();
        get_template_part('template-parts/fc', 'modal');
    }
}