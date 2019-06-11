<!doctype html>
<!-- Welcome to RISD.GD. Designed by Rohan Chaurasia and Julian Kelly, and developed by Julian. -->
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= $page->description()->text() ?>">
  <meta name="keywords" content="<?php foreach ($page->keywords()->split() as $keyword) {echo($keyword . ', ');}; ?>">
  <title>
    <?php if($page->isHomePage()): ?>RISD Graphic Design<?php else: ?>RISD GD | <?= $page->title() ?><?php endif ?>
  </title>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo kirby()->urls()->assets() . '/img/favicon.png' ?>">

  <?= js('assets/lib/jquery-3.3.1.min.js') ?>
  <?= js('assets/lib/jquery.smoothState.min.js') ?>
  <?= js('assets/lib/jquery.marquee.min.js') ?>
  <?= js('assets/js/index-5-6.js') ?>
  <?= css(['assets/lib/flickity.css', '@auto']) ?>
  <?= js('assets/lib/flickity.pkgd.min.js') ?>
  <?= css(['assets/css/main.css', '@auto']) ?>

</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137714894-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137714894-1');
</script>

<?php 
  $currentNum = 0;
  if ($page->isChildOf('notices') or $page->isChildOf('home')) {
    $currentNum = $page->parent()->num();
  } else {
    $currentNum = $page->num();
  }
?>

<body>
  <style>
  
  @font-face {
    font-family: '<?= $site->fontname()->text() ?>';
    font-style: normal;
    src: url('<?= $site->regularfont()->toFile()->url() ?>');
  }

  @font-face {
    font-family: '<?= $site->fontname()->text() ?>';
    font-style: italic;
    src: url('<?= $site->italicfont()->toFile()->url() ?>');
  }

  body {
    font-family: '<?= $site->fontname()->text() ?>';
  }
  </style>
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
