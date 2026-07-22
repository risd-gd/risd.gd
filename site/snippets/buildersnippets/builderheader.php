<c class="builder--item builder--header" <?php if($data->newrow()->isTrue()): ?>span=1-2<?php else: ?> span=2 <?php endif ?>>
    <?= $data->title()->text() ?>
</c>
