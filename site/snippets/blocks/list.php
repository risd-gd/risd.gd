<?php if($data->islarge()->isTrue()): ?>
    <c class="builder--item builder--list __islarge" span=row>
        <grid columns=12>
            <?php snippet('buildersnippets/builderheader', ['data' => $data]) ?>
            <?php foreach ($data->items()->toStructure() as $item): ?> 
            <c class="listitem" span=3>
                    <?php if($title = $item->title()->text()): ?>
                        <div class="listitem--title"><?= $title ?></div>
                    <?php endif ?>
                    <?php if($caption = $item->caption()->text()): ?>
                        <div class="listitem--caption"><?= $caption ?></div>
                    <?php endif ?>
                    <?php if($url = $item->url()->text()): ?>
                        <a href="<?= $url ?>">
                            <div class="listitem--url"><?= $url ?></div>
                        </a>
                    <?php endif ?>
            </c>
            <?php endforeach ?>
        </grid>
    </c>
    <?php else: ?>
    <c class="builder--item builder--list"span=6>
        <grid columns=6>
            <?php snippet('buildersnippets/builderheader', ['data' => $data]) ?>
            <c span=4>
            <?php foreach ($data->items()->toStructure() as $item): ?> 
                <div class="listitem">
                    <?php if($title = $item->title()->text()): ?>
                        <div class="listitem--title"><?= $title ?></div>
                    <?php endif ?>
                    <?php if($caption = $item->caption()->text()): ?>
                        <div class="listitem--caption"><?= $caption ?></div>
                    <?php endif ?>
                    <?php if($url = $item->url()->text()): ?>
                        <a href="<?= $url ?>">
                            <div class="listitem--url"><?= $url ?></div>
                        </a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
            </c>
        </grid>
    </c>
<?php endif ?>


