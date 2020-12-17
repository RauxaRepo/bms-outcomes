<?php $trackingID = get_field( 'ga_tracking_id', 'options' ); ?>
<?php if($trackingID) { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $trackingID ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag()
    {dataLayer.push(arguments);}

    gtag('js', new Date());

    gtag('config', '<?= $trackingID ?>');
</script>
<?php } ?>