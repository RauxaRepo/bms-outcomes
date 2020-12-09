<?php
/**
 * Bottom Tray - PDF File
 */
?>

<div class="tray__block tray__block--body js-tray-tab" style="display:none;" data-tab="<?= $i ?>">
    <div class="tray__block tray__block--prescribing">
        <div class="tray__block tray__block--pdf js-pdf-tab" data-pdf-url="<?= get_sub_field('file') ?>"></div>
    </div>
</div>