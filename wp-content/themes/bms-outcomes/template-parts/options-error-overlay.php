<?php
if (!empty(get_field('display_error_content', 'options'))) {
    $content = get_field('display_error_content', 'options');
}

if (!empty(get_field('display_error_messages', 'options'))) {
    $messages = get_field('display_error_messages', 'options');
}

?>
<div class="error-overlay">
    <div class="error-overlay__container">
        <div class="error-overlay__block">
            <h1><?= $content['header'] ?></h1>
        </div>
        <div class="error-overlay__block error-overlay__block--portrait">
            <div class="error-overlay__middle">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/portrait.png" alt="">
                <h5><?= $messages['tablet_portrait_error'] ?></h5>
            </div>
        </div>
        <div class="error-overlay__block error-overlay__block--mobile">
            <h5><?= $messages['mobile_error'] ?></h5>
        </div>
    </div>
    <div class="error-overlay__footer">
        <div class="error-overlay__footer-logo">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/rev-logo.png" alt="">
        </div>
        <div class="error-overlay__footer-content">
            <small>
                <?= $content['footer'] ?>
            </small>
        </div>
    </div>
</div>