<?php snippet('header') ?>

<?php if ($site->featuredNotice()->isNotEmpty()): ?>
  <?php snippet('featurednotice') ?>
<?php endif ?>

<main id="home">
  <div id="content" class="anim--fadein">
    <div id="questions">
      <?php foreach ($page->children()->listed() as $question): ?>
        <div class="question" data-imageurl="<?php echo $question->image()->url()?>" data-designers="<?php echo $question->designers()->text()?>" data-for="<?php echo $question->for()->text()?>" data-description="<?php echo $question->description()->text()?>">
          <?= $question->question()->text() ?>
          <img src="<?= $question->image()->url() ?>" height="70px">
        </div>
        <div id="answer">
          <grid columns=2>
            <c class="answer--image" span=1-2>
            </c>
            <c class="answer--designers">
            </c>
            <c class="answer--for">
            </c>
            <c class="answer--description" span=1-2>
            </c>
          </grid>
        </div>
      <?php endforeach ?>
  </div>
</main>

<!-- Because of smoothstate, we have to run object selectors inline, or in a separate JS file only accessed by this page. -->
<script>
  $('.question').click(function() {
    $('#questions').addClass('__isactive');
    $('.question').removeClass('__isactive');
    $('#answer').addClass('__isactive');
    $(this).addClass('__isactive');

    var imageURL = $(this).data('imageurl');
    var designers = $(this).data('designers');
    var description = $(this).data('description');
    var whoFor = $(this).data('for');

    $('.answer--image').empty();
    $('.answer--designers').empty();
    $('.answer--for').empty();
    $('.answer--description').empty();
    $('.answer--image').append(`<img src="${imageURL}">`);
    $('.answer--designers').append(`<div class="designers--caption">Designers</div><div class="designers--content">${designers}</div`);
    $('.answer--for').append(`<div class="for--caption">For</div><div class="for--content">${whoFor}</div`);
    $('.answer--description').append(description);
})
</script>

<?php snippet('footer') ?>
