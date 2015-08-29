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
		        <div class="text">
		        	<div class="text-inner">
		        	<?= $comment->comment; ?>
		        	</div>
		    	</div>
		    	<div class="user">
		    		<p class="name">Mike Oostdyk</p>
		    		<p>135 comments <span class="points">+28</span></p>
		    	</div>
		    </div>
		<?php endforeach; ?>
	</div>
	<div class="add_comment">
		<form id="add_comment" action="/comments/add/<?= $trip->id; ?>" method="post">
			<p>Share your local knowledge of <?= $trip->city; ?> with <?= $trip->user->firstname; ?>. Knowledge should always be free.</p>
			<div class="form-group">
				<textarea name="comment" class="form-control"></textarea>
			</div>
			<div class="form-control">
				<input type="submit" class="btn" value="Add Your Knowledge" />
			</div>
		</form>
	</div>
</div>
