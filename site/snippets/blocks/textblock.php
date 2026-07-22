<section class="textblock">
<?php if($block->featured()->isTrue()): ?>
    <div class="textblock--feature">
        <?= $block->text()->kt() ?>
    </div>
<?php else: ?>
    <div class="textblock--caption">
        <?= $block->caption()->text() ?>
    </div>
    <div class="textblock--content">
        <?= $block->text()->kt() ?>
    </div>
    <div class="textblock--cta">
        <?= $block->cta()->kt() ?>
    </div>
<?php endif ?>
</section>