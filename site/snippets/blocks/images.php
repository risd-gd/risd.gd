<c class="builder--item builder--images" span=1-12>
    <grid columns=12>
        <?php
            $images =  $data->imageselect()->toFiles();
            foreach($images as $image): ?>
                <c class="builder--image" span=<?= 12/$images->count()?>>
                    <img src="<?= $image->url() ?>" alt="">
                </c>
        <?php endforeach ?>
    </grid>
    <?php if($caption = $data->caption()->kt()): ?>
        <div class="builder--caption">
            <?= $caption ?>
        </div>
    <?php endif ?>
</c>