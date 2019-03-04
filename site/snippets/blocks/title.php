<c class="builder--title" span=row>
    <?php if ($title = $data->title()->text()): ?>
        <div class="title--text"><?= $data->title()->text() ?></div>
    <?php endif ?>
</c>