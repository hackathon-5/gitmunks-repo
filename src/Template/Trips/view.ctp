<div class="description"><?= $trip->description; ?></div>
<?php foreach($trip->comments as $comment): ?>
    <div class="comment">
        <?= $comment->comment; ?>
    </div>
<?php endforeach; ?>
