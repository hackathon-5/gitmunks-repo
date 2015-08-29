<?php $this->set('body_class', 'trip'); ?>
<div class="hero" style="background:url('/img/<?= strtolower($trip->city); ?>-hero.jpg'); background-size:cover;background-position:center center;">
    <h1>I want to go to <?= $trip->city; ?>, <?= $trip->state; ?> <?= $trip->country; ?></h1>
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
		    		<p class="name"><?= $comment->user->firstname.' '.$comment->user->lastname; ?></p>
		    		<p><?= $comment->user->comment_count; ?> comments <span class="points">+<?= $comment->user->rating; ?></span>
		    		</p>
		    		<svg class="heart"><use xlink:href="#heart"></use></svg>
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
			<div class="">
				<input type="submit" class="btn submit-response" value="Add Your Knowledge" />
			</div>
		</form>
	</div>
</div>
