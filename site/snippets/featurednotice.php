<?php $featurednotice = $pages->findByURI($site->featuredNotice()) ?>
<section id="featured--notice">
    <article class="notice __isactive">
    <grid columns=6>
        <c class="notice--date __isisolated" span= 2-5>
          <?php if($featurednotice->deadline()->isTrue()) 
            { echo "Deadline:<br>" . $featurednotice->date()->toDate('M j '); }
             else { echo $featurednotice->date()->toDate('M j, '); }?><?= $featurednotice->timing()->text() ?><br>
          <?= $featurednotice->location()->text() ?>
        </c>
        <c class="notice--title" span=2-5>
          <h1><?= $featurednotice->title() ?></h1>
        </c>
        <c class="notice--content" span=2-5>
          <?= $featurednotice->text()->kt() ?>
        </c>
      </grid>
  </article>
</section>
