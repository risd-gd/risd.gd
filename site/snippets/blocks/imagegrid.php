<section class="imagegrid">
    <?php 
            $images = $data->imageselect()->toFiles();
            foreach($images as $image): ?>
        <div class="imagegrid--image">
                <img src="<?= $image->url() ?>">
        </div>
    <?php endforeach ?>
    <div class="imagegrid--caption">
        <?= $data->caption()->text() ?>
    </div>
    <div class="imagegrid--description">
        <?= $data->description()->text() ?>
    </div>
</section>