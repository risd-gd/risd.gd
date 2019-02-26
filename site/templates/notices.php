<?php snippet('header') ?>

<main id="notices">
  <div id="content" class="anim--fadein">
    <?php foreach ($page->children()->listed() as $notice): ?>
    <article class="notice __isinteractive">
      <grid columns = 6>
        <c class="notice--date" span-s=1-6>
          <?php if($notice->deadline()->isTrue()) 
            { echo "Deadline:<br>" . $notice->date()->toDate('M j '); }
             else { echo $notice->date()->toDate('M j, '); }?><?= $notice->timing()->text() ?><br>
          <?= $notice->location()->text() ?>
        </c>
        <c class="notice--title" span=2-5 span-s=1-6>
          <h1><?= $notice->title() ?></h1>
        </c>
        <c class="notice--tools" span=1-1 span-s=1-6>
          <a href="<?= $notice->url() ?>"><div class="notice--button">Link</div></a><a><div class="notice--button">Print</div></a>
        </c>
        <c class="notice--content" span=2-5 span-s=1-6>
          <?= $notice->text()->kt() ?>
        </c>
      </grid>
    </article>
    <?php endforeach ?>
  </div>
</main>

<!-- Because of smoothstate, we have to run object selectors inline, or in a separate JS file only accessed by this page. -->
<script>
  $('.notice').click(function() {
    $('.notice').removeClass('__isactive');
    $(this).addClass('__isactive');
})
</script>

<?php snippet('footer') ?>
