<?php
/**
 * Flexible Content
 */
if (have_rows('flexible_content')) {
    while (have_rows('flexible_content')) {
        the_row();
        get_template_part('template-parts/fc', get_row_layout());
    }
}