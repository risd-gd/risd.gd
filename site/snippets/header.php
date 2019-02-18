<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/main.css', '@auto']) ?>
  <?= js('assets/lib/jquery-3.3.1.min.js') ?>
  <?= js('assets/lib/jquery.smoothState.min.js') ?>
  <?= js('assets/js/index.js') ?>

</head>
<body>
  <div id="container">
    <nav id="nav" data-current="<?= $page->num() ?>">
      <?php foreach ($site->children()->listed() as $item): ?>
        <div id="pane--<?= $item->num() ?>" class="nav--pane <?php e($item->isActive(), '__isactive') ?>"> 
          <a data-target="<?= $item->num() ?>" href="<?= $item->url() ?>">
            <div class="pane--handle">
              <?= $item->title() ?>
            </div>
          </a>
        </div>
      <?php endforeach ?>
  </nav>
