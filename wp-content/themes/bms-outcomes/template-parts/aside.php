<?php
$asideCta = get_field('aside_start_date_cta', 'options');
?>
<aside class="aside">
    <div class="aside__container">
        <a class="aside__banner aside__banner--modal" href="<?= $asideCta['link'] ?>">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/external.png" alt="">
            <span><?= $asideCta['label'] ?></span>
        </a>
        <div class="aside__footer">
            <div class="aside__logo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
            </div>
        </div>
    </div>
</aside>