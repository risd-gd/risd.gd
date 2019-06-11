<?php snippet('header') ?>

<main id="notices">
  <div id="content" class="anim--fadein">
    <?php foreach ($notices = $page->children()->listed()->paginate(10) as $notice): ?>
      <section class="notice notice__interactive">
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
    <?php endforeach ?>
  </div>
  <?php if ($notices->pagination()->hasPages()): ?>
    <div id="pagination">

    <?php if ($notices->pagination()->hasNextPage()): ?>
    <a class="pagination--next" href="<?= $notices->pagination()->nextPageURL() ?>">
        ‹ older posts
    </a>
    <?php endif ?>

    <?php if ($notices->pagination()->hasPrevPage()): ?>
    <a class="pagination--prev" href="<?= $notices->pagination()->prevPageURL() ?>">
        newer posts ›
    </a>
    <?php endif ?>
    <div class="">
        <?= $notices->pagination()->page() . '/' . $notices->pagination()->pages() ?>
    </div>

    </div>
<?php endif ?>
</main>


<?php snippet('footer') ?>


