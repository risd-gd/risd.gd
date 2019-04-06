<section class="notice <?php if($page->template()->name() == "notice"): ?> notice__isolated<?php endif ?><?php if($page->template()->name() != "notices"): ?> notice__active<?php endif ?>">
    <div class="notice--meta">
        <p>
            <span class="notice--timing"><?= $notice->timing()->text() ?><br /></span>
            <span class="notice--location"><?= $notice->location()->text() ?></span>
        </p>
    </div>
    <div class="notice--title">
        <h2><?= $notice->title() ?></h2>
    </div>
    <div class="notice--body">
        <?= $notice->text()->kt() ?>
    </div>
    <div class="notice--tools">
        <a href="<?= $notice->url() ?>" data-target=3>
            <button class="notice--button button--permalink">
                <?php snippet('svg/svg-permalink') ?>
            </button>
        </a>
        <a>
            <button class="notice--button button--print">
                <?php snippet('svg/svg-print') ?>
            </button>
        </a>
    </div>
    <div class="notice--hidden">
        <p>risd.gd/notices <?= $notice->location()->text() ?></p>
    </div>
</section>