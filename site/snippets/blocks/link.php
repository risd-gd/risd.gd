<?php 
$link = "";
if($block->isinternal()->isTrue()) {
    $link = $block->internallink()->toPage()->url();
} else {
    $link = $block->externallink()->toString();
} ?>

<a href="<?= $link ?>" data-target=1>
<section class="link">
    <div class="link--caption">
        <?= $block->caption()->text() ?>
    </div>
    <div class="link--title">
        <?= $block->title()->text() ?>
    </div>
    <div class="link--icon">
        <?php snippet('svg/svg-link') ?>
    </div>
</section>
</a>

