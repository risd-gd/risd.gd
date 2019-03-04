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