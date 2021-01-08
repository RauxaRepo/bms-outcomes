<?php
/**
 * Page Modal
 */

$layout = get_sub_field( 'layout' );
$pdfFile = get_sub_field( 'pdf-file' );

$backgroundColor =  $layout['background_color'] ? $layout['background_color'] : '';
$id = $layout['id'];

?>
<section class="modal js-modal" id="<?= $id ?>" role="dialog" style="background-color: <?= $backgroundColor ?>;">
  <div class="container modal__container">
    <div class="modal__block">
      <div class="modal__block modal__block--inner">
        <div class="modal__block modal__block--close">
          <button class="modal__button modal__button--close js-modal-close" type="button" name="Close" title="Close" aria-label="Close Modal">
            <span class="modal__span"></span>
          </button>
        </div>
        <div class="modal__block modal__block--pdf js-modal-pdf" data-pdf-url="<?= $pdfFile['file'] ?>"></div>
      </div>
    </div>
  </div>
</section>