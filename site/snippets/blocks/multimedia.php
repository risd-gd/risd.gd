<section class="multimedia <?php 
$style = $data->style()->toString();

switch ($style) {
    case "right":
        echo "multimedia__right";
        break;
    case "left":
        echo "multimedia__left";
        break;
    case "full":
        echo "multimedia__full";
        break;
}
?>">
    <?php if($data->videofile()->isNotEmpty()): ?>
        <div class="multimedia--video">
            <video autoplay muted loop>
                <source src="<?= $data->videofile()->toFile()->url() ?>" type="video/<?= $data->videofile()->toFile()->extension() ?>">
            </video>
        </div>
    <?php else: ?>
        <div class="multimedia--embed">    
            <?= $data->embed()->text() ?>
        </div>
    <?php endif ?>
    <?php if($data->caption()->isNotEmpty()): ?>
        <div class="multimedia--caption">
            <?= $data->caption()->kt() ?>
        </div>
    <?php endif ?>
</section>