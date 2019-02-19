<?php snippet('header') ?>

<?php if ($site->featuredNotice()->isNotEmpty()): ?>
  <?php snippet('featurednotice') ?>
<?php endif ?>

<main id="home">
  <div id="content" class="anim--fadein">
   <?php foreach ($page->children()->listed() as $question): ?>
   <?= $question->question()->text() ?>
   <img src="<?= $question->image()->url() ?>" height="70px">
   <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
