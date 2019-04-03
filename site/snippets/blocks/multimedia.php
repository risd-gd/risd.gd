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
    <div class="multimedia--embed">    
        <?= $data->embed()->text() ?>
    </div>
    <?php if($data->caption()->isNotEmpty()): ?>
        <div class="multimedia--caption">
            <?= $data->caption()->kt() ?>
        </div>
    <?php endif ?>
</section>