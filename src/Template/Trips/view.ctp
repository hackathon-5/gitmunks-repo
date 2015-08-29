<?php $this->set('body_class', 'trip'); ?>
<div class="hero" style="background:url('/img/greenville-hero.jpg'); background-size:cover;background-position:center center;">
    <h1>Greenville, SC</h1>
</div>
<div class="trip-content">
	<div class="description"><?= $trip->description; ?></div>
	<p class="name"><?= $trip->user->firstname . ' ' . $trip->user->lastname; ?></p>
	<p><strong>Travel Date:</strong> <?= $trip->date; ?></p>
	<p><strong>Desired Activity Type:</strong> Adventurous</p>
	<?php foreach($trip->comments as $comment): ?>
	    <div class="comment">
	    	<div class="user">
	    		<p>Mike Oostdyk</p>
	    		<p>135 comments <span class="points">+28</span></p>
	    	</div>
	        <div class="text">
	        	<?= $comment->comment; ?>
	    	</div>
	    </div>
	<?php endforeach; ?>
</div>
