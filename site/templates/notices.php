<?php snippet('header') ?>

<main id="notices">
  <div id="content" class="anim--fadein">
    <?php foreach ($page->children()->listed() as $notice): ?>
      <?php snippet('notice', ['notice' => $notice]) ?>
    <?php endforeach ?>
  </div>
</main>


<?php snippet('footer') ?>
