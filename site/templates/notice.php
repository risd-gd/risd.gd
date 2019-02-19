<?php snippet('header') ?>

<main id="notice">
  <article id="content" class="notice __isactive anim--fadein">
    <grid columns=6>
        <c class="notice--date __isisolated" span=2-5>
          <?php if($page->deadline()->isTrue()) 
            { echo "Deadline:<br>" . $page->date()->toDate('D M j '); }
             else { echo $page->date()->toDate('M j, '); }?><?= $page->timing()->text() ?><br>
          <?= $page->location()->text() ?>
        </c>
        <c class="notice--title" span=2-5>
          <h1><?= $page->title() ?></h1>
        </c>
        <c class="notice--tools" span=1-1>
          <div class="notice--button">Print</div>
        </c>
        <c class="notice--content" span=2-5>
          <?= $page->text()->kt() ?>
        </c>
      </grid>
  </article>
</main>

<?php snippet('footer') ?>