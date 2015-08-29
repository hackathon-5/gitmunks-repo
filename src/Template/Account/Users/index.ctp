<?php $this->set('body_class', 'user-index'); ?>
<div class="hero" style="background:url('/img/greenville-hero.jpg'); background-size:cover;background-position:center center;">
    <h1>Greenville, SC</h1>
</div>
<section class="posts">
    <h1>My Trip Questions</h1>
    <?php foreach($mytrips as $trip): ?>
        <div class="post <?= $trip->comment_count > 0? 'answer':''; ?>">
            <a href="/trips/view/<?= $trip->id; ?>">
                <p class="question"><?= $trip->description; ?></p>
                <?php if($trip->comment_count > 0): ?>
                    <span class="answers"><?= $trip->comment_count; ?></span>
                <?php endif; ?>
                <svg class="comment"><use xlink:href="#comment"></use></svg>
            </a>
        </div>
    <?php endforeach; ?>
    <h1>Travelers who need your help.</h1>
    <?php foreach($trips as $trip): ?>
    <div class="post <?= $trip->comment_count > 0? 'answer':''; ?>">
        <a href="/trips/view/<?= $trip->id; ?>">
            <p class="question"><?= $trip->description; ?></p>
            <?php if( $trip->comment_count > 0): ?>
                <span class="answers"><?=  $trip->comment_count; ?></span>
            <?php endif; ?>
            <svg class="comment"><use xlink:href="#comment"></use></svg>
        </a>
    </div>
    <?php endforeach; ?>
</section>