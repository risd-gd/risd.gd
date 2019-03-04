<grid id="builder" columns=12 columns-s=6>
    <?php foreach($page->builder()->toBuilderBlocks() as $block): ?>
        <?php snippet('blocks/' . $block->_key(), array('data' => $block)) ?>
    <?php endforeach ?>
</grid>