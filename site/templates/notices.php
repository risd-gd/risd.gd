<?php snippet('header') ?>

<main id="notices">
  <div id="content" class="anim--fadein">
    <?php foreach ($page->children()->listed() as $notice): ?>
      <?php snippet('notice', ['notice' => $notice]) ?>
    <?php endforeach ?>
  </div>
</main>

<!-- Because of smoothstate, we have to run object selectors inline, or in a separate JS file only accessed by this page. -->
<script>
  $('.notice').removeClass('notice__active');

  $('.notice').click(function() {
    $('.notice').removeClass('notice__active');
    $(this).addClass('notice__active');
})
</script>

<?php snippet('footer') ?>
