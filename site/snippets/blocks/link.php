<?php 
$link = "";
if($data->isinternal()->isTrue()) {
    $link = $data->internallink()->toPage()->url();
} else {
    $link = $data->externallink()->toString();
} ?>

<a href="<?= $link ?>" data-target=1>
<section class="link">
    <div class="link--caption">
        <?= $data->caption()->text() ?>
    </div>
    <div class="link--title">
        <?= $data->title()->text() ?>
    </div>
    <div class="link--icon">
        <?php snippet('svg/svg-link') ?>
    </div>
</section>
</a>

