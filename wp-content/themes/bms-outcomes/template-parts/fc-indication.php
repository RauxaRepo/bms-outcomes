<?php
/**
 * Indication
 */
$indication = get_field('indication');

if ($indication) {
    ?>
    <div class="indication js-indication">
        <div class="indication__container">
            <div class="indication__content">
                <small><?= $indication ?></small>
            </div>
            <div class="indication__tools">
                <button class="indication__close js-indication-close">close</button>
            </div>
        </div>
    </div>
<?php }
