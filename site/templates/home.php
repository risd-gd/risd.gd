<?php snippet('header') ?>

<?php if ($site->featuredNotice()->isNotEmpty()): ?>
  <?php snippet('featurednotice') ?>
<?php endif ?>

<main id="home">
  <div id="content" class="anim--fadein">
    <div id="featured">
      <?php foreach ($page->children()->listed() as $feature): ?>
        <?php if ($feature->template() == "question"): ?>
          <div class="question" data-imageurl="<?php echo $feature->image()->url()?>" data-designers="<?php echo $feature->designers()->text()?>" data-for="<?php echo $feature->for()->text()?>" data-description="<?php echo $feature->description()->text()?>">
            <grid columns=6>
              <c class="question--shorthand" span-s=1-6>
                <?= $feature->shorthand()->text() ?>
              </c>
              <c class="question--title" span=2-5>  
                <?= $feature->question()->text() ?>
              </c>
              <c class="question--image">
                <img src="<?= $feature->image()->url() ?>" height="120px">
              </c>
            </grid>
            <grid class="question--answer" columns=2>
            </grid>
          </div>
        <?php else: ?>
          <div class="feature">
            <grid columns=6>
              <c class="feature--date" span-s=1-6>
                <?= $feature->date()->toDate('M j, ') ?><br>
                <?= $feature->date()->toDate('Y') ?>
              </c>
              <c class="feature--title" span=2-5>
                <a href="<?= $feature->link() ?>" >
                  <?= $feature->title()->text() ?>
                </a>
              </c>
            </grid>
          </div>
        <?php endif ?>
      <?php endforeach ?>
  </div>
</main>

<!-- Because of smoothstate, we have to run object selectors inline, or in a separate JS file only accessed by this page. -->
<script>
  $('.question').click(function() {
    $('.question').removeClass('__isactive');
    $(this).addClass('__isactive');

    var imageURL = $(this).data('imageurl');
    var designers = $(this).data('designers');
    var description = $(this).data('description');
    var whoFor = $(this).data('for');

      $('.question--answer').empty();
      var answer = `<c class="answer--image">
                        <img src="${imageURL}">
                      </c>
                      <grid columns=2 class="answer--metadata">
                        <c class="answer--description" span=1-2>
                          ${description}
                        </c>
                        <c class="answer--designers">
                          <div class="designers--caption">
                            Designers
                          </div>
                          <div class="designers--content">
                            ${designers}
                          </div>
                        </c>
                        <c class="answer--for">
                          <div class="for--caption">
                            For
                          </div>
                          <div class="for--content">
                            ${whoFor}
                          </div>
                        </c>
                      </grid>`
      $(this).children('.question--answer').append(answer);
})
</script>

<?php snippet('footer') ?>
