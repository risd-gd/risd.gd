
<?php $type = $block->mediatype();
    if( $type == 'image') {
        $width = $block->width_gallery()->toString();
    } else {//video
        $width = $block->width_video()->toString();
    }
?> 
<section class="<?=$type ?> <?php 
    switch ($width) {
        case "right":
            echo $type."__right";
            break;
        case "left":
            echo $type."__left";
            break;
        case "full":
            echo $type."__full";
            break;
        case "full-width":
            echo $type."__full";
            break;
        case "half-width":
            echo "half_width";
            break;
    }
?>">
    <?php if ($type == 'image'):?> 
        <?php if ($block->galleryfile()->toFiles()->count() > 1): //gallery ?>
            <div id= "<?= $block->_uid() ?>" 
            data-flickity='{ "imagesLoaded": true }' class="image--images carousel">
                <?php 
                $images = $block->galleryfile()->toFiles();
                foreach($images as $image): ?>
                    <div class="carousel--item">
                        <img src="<?= $image->url() ?>">
                    </div>
                <?php endforeach ?>
            </div>
        <?php else:  //single image ?>
            <?php if ($image = $block->galleryfile()->toFile()): ?>
                <div class="image--images">
                    <img src="<?= $image->url() ?>" >
                </div>
            <?php endif ?>
        <?php endif ?>
    <?php endif ?>
    <?php if($type == 'video'):?>
        <?php if($block->videofile()->isNotEmpty()): ?>
            <div class="video--file">
                <video autoplay muted loop>
                    <source src="<?= $block->videofile()->toFile()->url() ?>" type="video/<?= $block->videofile()->toFile()->extension() ?>">
                </video>
            </div>
        <?php else: ?>
            <div class="video--embed">    
                <?= $block->embed()->text() ?>
            </div>
        <?php endif ?>
    <?php endif ?>
    <?php if($block->caption()->isNotEmpty()): ?>
        <div class="caption">
            <?= $block->caption()->kt() ?>
        </div>
    <?php endif ?>
</section>