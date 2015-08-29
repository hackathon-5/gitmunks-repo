<?php $this->set('body_class', 'trip'); ?>
<div class="hero" style="background:url('/img/greenville-hero.jpg'); background-size:cover;background-position:center center;">
    <h1>Greenville, SC</h1>
</div>
<div class="trip-content">
	<div class="trip-user">
		<div class="description"><?= $trip->description; ?></div>
		<p class="name"><?= $trip->user->firstname . ' ' . $trip->user->lastname; ?></p>
		<p class="dates"><strong>Travel Date:</strong> <?= $trip->date; ?></p>
		<p class="activity"><strong>Desired Activity Type:</strong> Adventurous</p>
	</div>
	<div class="comments">
		<?php foreach($trip->comments as $comment): ?>
		    <div class="comment">
		    	<div class="user">
		    		<p class="name">Mike Oostdyk</p>
		    		<p>135 comments <span class="points">+28</span></p>
		    	</div>
		        <div class="text">
		        	<div class="text-inner">
		        	<?= $comment->comment; ?>
		        	</div>
		    	</div>
		    </div>
		<?php endforeach; ?>
	</div>
</div>
