<?php snippet('header') ?>

<main id="notice">
  <div id="content" class="anim--fadein">
      <section class="notice notice__active notice__isolated">
          <div class="notice--meta">
                <div class="notice--timing"><?= $page->timing()->text() ?></div>
                <div class="notice--location"><?= $page->location()->text() ?></div>
          </div>
          <div class="notice--title">
              <h2><?= $page->title() ?></h2>
          </div>
          <div class="notice--body">
              <?= $page->text()->kt() ?>
          </div>
          <div class="notice--tools">
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
  </div>
</main>


<?php snippet('footer') ?>