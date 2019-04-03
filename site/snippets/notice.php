<section class="notice notice__active">
    <div class="notice--meta">
        <?= $notice->timing()->text() ?><br />
            <?= $notice->location()->text() ?>
    </div>
    <div class="notice--title">
        <h2><?= $notice->title() ?></h2>
    </div>
    <div class="notice--body">
        <?= $notice->text()->kt() ?>
    </div>
    <div class="notice--tools">
        <a href="<?= $notice->url() ?>" data-target=3>
            <button class="notice--button">
                <?php snippet('svg/svg-permalink') ?>
            </button>
        </a>
        <a>
            <button class="notice--button">
                <?php snippet('svg/svg-print') ?>
            </button>
        </a>
    </div>
</section>