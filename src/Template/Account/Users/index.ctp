<?php $this->set('body_class', 'user-index'); ?>
<div class="hero" style="background:url('/img/greenville-hero.jpg'); background-size:cover;background-position:center center;">
    <h1>Greenville, SC</h1>
</div>
<section class="posts">
    <?php foreach($trips as $trip): ?>
    <div class="post <?= count($trip->comments) > 0? 'answer':''; ?>">
        <a href="/trips/view/<?= $trip->id; ?>">
            <p class="question"><?= $trip->description; ?></p>
            <?php if(count($trip->comments) > 0): ?>
                <span class="answers"><?= count($trip->comments); ?></span>
            <?php endif; ?>
            <svg class="comment"><use xlink:href="#comment"></use></svg>
        </a>
    </div>
    <?php endforeach; ?>
</section>