
<?php if($data->islarge()->isTrue()): ?>
    <c class="builder--item builder--textblock __islarge" span=row>
        <grid columns=12>
            <?php snippet('buildersnippets/builderheader', ['data' => $data]) ?>
            <c span=3-10>

<?php else: ?>
    <c class="builder--item builder--textblock" span=12>
        <grid columns=12>
            <?php snippet('buildersnippets/builderheader', ['data' => $data]) ?>
            <c span=4>
<?php endif ?>
    <?= $data->text()->kt() ?>
</c>
</grid>
</c>