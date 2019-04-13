<!doctype html>
<!-- Welcome to RISD.GD. Designed by Rohan Chaurasia and Julian Kelly, and developed by Julian. -->
<!-- The site is built on Kirby CMS, and uses Smoothstate.js for the page transitions. -->
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>
    <?php if($page->isHomePage()): ?>RISD Graphic Design<?php else: ?>RISD GD | <?= $page->title() ?><?php endif ?>
  </title>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo kirby()->urls()->assets() . '/img/favicon.png' ?>">

  <?= css(['assets/lib/normalize.css', '@auto']) ?>
  <?= js('assets/lib/jquery-3.3.1.min.js') ?>
  <?= js('assets/lib/jquery.smoothState.min.js') ?>
  <?= js('assets/lib/jquery.marquee.min.js') ?>
  <?= js('assets/lib/text-balancer.standalone.js') ?>
  <?= js('assets/js/index.js') ?>
  <?= css(['assets/lib/flickity.css', '@auto']) ?>
  <?= js('assets/lib/flickity.pkgd.min.js') ?>
  <?= css(['assets/css/main.css', '@auto']) ?>

</head>

<?php 
  $currentNum = 0;
  if ($page->isChildOf('notices') or $page->isChildOf('home')) {
    $currentNum = $page->parent()->num();
  } else {
    $currentNum = $page->num();
  }
?>

<body>
  <div id="anim--container">
    <nav id="nav" data-current="<?= $currentNum ?>">
      <?php foreach ($site->children()->listed() as $item): ?>

        <div id="pane--<?= $item->num() ?>" class="nav--pane <?php if($item->isActive() or $page->parent() == $item):?> pane--handle__active <?php endif ?>"> 

          <?php if($item->title()->toString() == 'Notices' && $page->isHomePage()): ?>

              <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
                <div class="pane--handle __hasmarquee">
                  <div class="notices--marquee">
                    <?php foreach ($item->children()->listed()->limit(5) as $notice): ?>
                      <?= $notice->title() ?><span class="marquee--marker">NOTICES</span>
                    <?php endforeach ?>
                  </div>
                </div>
              </a>

              <?php elseif($item->isHomePage() and $page->template()->name() == "internal"): ?>

                <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
                  <div class="pane--handle">
                    <?= $item->title() ?>&nbsp;<span class="pane--subpagetitle">/ <?= $page->title() ?></span>
                  </div>
                </a>

              <?php else: ?>
                <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
                    <div class="pane--handle">
                      <?= $item->title() ?>
                    </div>
                  </a>
              <?php endif ?>
        </div>

      <?php endforeach ?>
  </nav>
