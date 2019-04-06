<section class="textblock">
<?php if($data->featured()->isTrue()): ?>
    <div class="textblock--feature">
        <?= $data->text()->kt() ?>
    </div>
<?php else: ?>
    <div class="textblock--caption">
        <?= $data->caption()->text() ?>
    </div>
    <div class="textblock--content">
        <?= $data->text()->kt() ?>
    </div>
    <div class="textblock--cta">
        <?= $data->cta()->kt() ?>
    </div>
<?php endif ?>
</section>