<?php

/* Template Name: Start Date Page */

get_header();

$header = get_field('header', 'options');
?>

    <main class="main js-main date-selector-page">
        <aside class="aside">
            <div class="aside__container">
                <h2><?= $header['headline'] ?></h2>

                <div class="aside__avatar">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/maintenance-patient-avatar.png" alt="Maintenance Patient">
                </div>

                <div class="aside__footer">
                    <div class="aside__logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
                    </div>
                </div>
            </div>
        </aside>

        <section class="content">
            <?php get_template_part('template-parts/nav-main-menu') ?>
            <div class="content__container">
                <section class="date-selector js-date-selector">
                    <div class="date-selector__container">
                        <div class="date-selector__header">
                            <h3>
                                <?= get_field('title') ?>
                            </h3>
                        </div>
                        <div class="date-selector__form">
                            <div class="custom-select custom-select--month js-custom-select js-month-select">
                                <div class="custom-select__trigger js-month-select-trigger" aria-describedby="month-error">
                                    <span class="js-month-select-label"></span>
                                    <div class="custom-select__arrow"></div>
                                </div>
                                <div class="custom-select__options js-month-select-options"></div>
                                <span class="custom-select__error p js-custom-select-error" role="alert" id="month-error">Select Month</span>
                            </div>
                            <div class="custom-select custom-select--year js-custom-select js-year-select">
                                <div class="custom-select__trigger js-year-select-trigger"  aria-describedby="year-error">
                                    <span class="js-year-select-label"></span>
                                    <div class="custom-select__arrow"></div>
                                </div>
                                <div class="custom-select__options js-year-select-options"></div>
                                <span class="custom-select__error p js-custom-select-error" role="alert" id="year-error">Select Year</span>
                            </div>
                            <a href="<?= get_field('cta_link') ?>" class="cta js-date-selector-submit">
                                <?= get_field('cta_label') ?>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <?php get_template_part('template-parts/footer'); ?>
        </section>
    </main>

<?php

get_footer();
