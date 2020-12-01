<?php
/**
 * Bottom Tray
 *
 * The tabs are dynamically set. This allows changing the tabs easier.
 */

if (!empty(get_field('tray_ctas', 'options'))) {
    $ctas = get_field('tray_ctas', 'options');
}

?>
<section class="tray js-tray">
    <div class="tray__block tray__block--header js-tray-header">
        <nav class="tray__nav">
            <ul class="tray__ul">
                <?php
                if (have_rows('tray_tabs', 'options')) {
                    $i = 0;
                    while (have_rows('tray_tabs', 'options')) {
                        the_row();
                        $i++;

                        if ($i == 1) {
                            $class = 'tray__button tray__button--active tray__button--first js-expand-tray js-tab-select js-button-default';
                        } else {
                            $class = 'tray__button js-expand-tray js-tab-select';
                        }

                        ?>
                        <li class="tray__li">
                            <button class="<?= $class ?>" type="button" name="button"
                                    data-tab="<?= $i ?>"><?= get_sub_field('label') ?></button>
                        </li>
                        <?php

                    }
                }

                ?>
            </ul>
            <button class="tray__button tray__button--expand js-expand-tray" type="button" name="button">
                <span class="tray__span tray__span--helper js-tray-helper-open"><?= $ctas['expand'] ? $ctas['expand'] : 'Expand' ?></span>
                <span class="tray__span tray__span--helper js-tray-helper-close"
                      style="display: none;"><?= $ctas['close'] ? $ctas['close'] : 'Close' ?></span>
                <span class="tray__span tray__span--icon js-expand-icon"></span>
            </button>
        </nav>
    </div>
    <div class="container container--full-width-lg tray__container js-tray-content">
        <?php
        if (have_rows('tray_tabs', 'options')) {
            $i = 0;
            while (have_rows('tray_tabs', 'options')) {
                the_row();
                $i++;
                /*
                 * Using include instead of get_template_part
                 * This allows us to pass in $i for the index
                 *
                 */
                include('options-tray-' . get_row_layout() . '.php');
            }
        }
        ?>
    </div>
</section>