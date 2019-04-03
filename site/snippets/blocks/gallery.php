<section class="gallery <?php 
$style = $data->style()->toString();

switch ($style) {
    case "right":
        echo "gallery__right";
        break;
    case "left":
        echo "gallery__left";
        break;
    case "full":
        echo "gallery__full";
        break;
}
?>">
    <?php if($data->imageselect()->toFiles()->count() != 1): ?>


        <div class="gallery--images carousel">

            <?php 
            $images = $data->imageselect()->toFiles();
            foreach($images as $image): ?>
            
                <div class="carousel--item">
                    <img src="<?= $image->url() ?>">
                </div>

            <?php endforeach ?>

        </div>


    <?php else: ?>

        <div class="gallery--images">

            <img src="<?= $data->imageselect()->toFile()->url() ?>" >

        </div>

    <?php endif ?>

    <?php if($data->caption()->isNotEmpty()): ?>
        <div class="gallery--caption">
            <?= $data->caption()->kt() ?>
        </div>
    <?php endif ?>

</section>











