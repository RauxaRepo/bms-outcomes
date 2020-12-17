<?php
$footer = get_field('footer', 'options');
?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__content">
            <small><?= $footer['copy'] ?></small>
        </div>
    </div>
</footer>
