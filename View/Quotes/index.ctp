<?php foreach ($quotes as $i => $quote) { ?>
	<?php if ($i != 0) { ?>
		<hr class="featurette-divider">
	<?php } ?>
	<div class="row featurette">
		<div class="col-md-7">
			<p class="lead">
				<?php echo h($quote['Quote']['text']); ?>
			</p>
		</div>
		<div class="col-md-5">
			<h2 class="featurette-heading"><?php echo $quote['Quote']['author']; ?>,
			<span class="text-muted"><?php echo @h($quote['Quote']['title']); ?></span></h2>
		</div>
	</div>
<?php } ?>
