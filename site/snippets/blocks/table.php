<?php if($title = $data->title()->text()): ?>
    <c class="builder--header" span=2>
        <?= $title ?>
    </c>
<?php endif ?>
<c class="builder--item builder--table" span=3-10>
    <grid columns=8>
    <?php foreach ($data->columnheaders()->toStructure() as $columnheader): ?>
        <c span=2>
            <?= $columnheader->columnheader()->text() ?>
        </c>
    <?php endforeach ?>
    <?php foreach ($data->rows()->toStructure() as $columnheader): ?>
        <c span=2>
            <?= $columnheader ?>
        </c>
    <?php endforeach ?>
    </grid>
</c>