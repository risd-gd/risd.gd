<section class="list" columns=12>
    <div class="list--caption">
        <?= $data->caption()->text() ?>
    </div>
    <div class="list--cta">
        <?php if ($data->cta()->isNotEmpty()): ?>
            <?= $data->cta()->kt() ?>
        <?php endif ?>
    </div>
    <?php if ($data->description()->isNotEmpty()): ?>
        <div class="list--description">
                <?= $data->description()->kt() ?>
        </div>
    <?php endif ?>
    <?php foreach ($data->items()->toStructure() as $item): ?>
        <a class="list--item" <?php if($item->externallink()->isNotEmpty()): ?> href="<?=$item->externallink()->text() ?>"<?php endif ?>>
            <div class="item--title">
                <?= $item->title()->text() ?>
            </div>
            <div class="item--description">
                <?= $item->description()->text() ?>
            </div>
        </a>
        <?php if($item->externallink()->isNotEmpty()): ?>
            <div class="item--icon">
                <?php snippet('svg/svg-link') ?>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</div>
</section>