<section class="notice <?php if($page->template()->name() == "notice"): ?> notice__isolated<?php endif ?><?php if($page->template()->name() != "notices"): ?> notice__active<?php endif ?>">
    <div class="notice--meta">
            <div class="notice--timing"><?= $notice->timing()->text() ?></div>
            <div class="notice--location"><?= $notice->location()->text() ?></div>
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
        risd.gd/notices
    </div>
</section>