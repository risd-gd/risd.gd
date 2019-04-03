<?php if($data->featured()->isTrue()): ?>
    <section class="textblock textblock__featured">
        <?= $data->text()->kt() ?>
    </section>
<?php else: ?>
    <section class="textblock">
        <div class="textblock--title">
            <?= $data->title()->text() ?>
        </div>
        <div class="textblock--content">
            <?= $data->text()->kt() ?>
        </div>
        <div class="textblock--cta">
            <?= $data->cta()->kt() ?>
        </div>
    </section>
<?php endif ?>