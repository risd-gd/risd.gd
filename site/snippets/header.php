<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/lib/normalize.css', '@auto']) ?>
  <?= css(['assets/lib/grid.css', '@auto']) ?>
  <?= css(['assets/css/main.css', '@auto']) ?>
  <?= js('assets/lib/jquery-3.3.1.min.js') ?>
  <?= js('assets/lib/jquery.smoothState.min.js') ?>

  <?= js('assets/lib/jquery.marquee.min.js') ?>
  <?= js('assets/js/index.js') ?>

</head>
<body>
  <div id="anim--container">
    <nav id="nav" data-current="<?php if($page->isChildOf('notices')) {echo $page->parent()->num();} else {echo $page->num();} ?>">
      <?php foreach ($site->children()->listed() as $item): ?>
        <div id="pane--<?= $item->num() ?>" class="nav--pane <?php e($item->isActive(), '__isactive') ?>"> 
            <?php if($item->title() == 'Notices' && $page->isHomePage()): ?>
              <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
                <div class="pane--handle __hasmarquee">
                  <div class="notices--marquee">
                    <?php foreach ($item->children()->listed() as $notice): ?>
                    <?= $notice->title() ?><span class="marquee--marker">NOTICES</span>
                    <?php endforeach ?>
                  </div>
                </a>
              <?php else: ?>
                <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
                  <div class="pane--handle">
                    <?= $item->title() ?>
                  </div>
                </a>
              <?php endif ?>
          </a>
        </div>
      <?php endforeach ?>
  </nav>
