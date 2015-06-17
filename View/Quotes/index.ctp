<?php foreach ($quotes as $quote) { ?>
	<hr class="featurette-divider">
	<div class="row featurette">
	    <div class="col-md-7">    
	        <p class="lead">
				<?php echo h($quote['Quote']['text']); ?>
	        </p>
	    </div>
	    <div class="col-md-5">
			<h2 class="featurette-heading"><?php echo h($quote['Quote']['author']); ?>
			<span class="text-muted"><?php echo h($quote['Quote']['title']); ?></span></h2>
	    </div>
	</div>
<?php } ?>
