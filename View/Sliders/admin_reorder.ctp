<div class="sliders index">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
					<ul class="nav nav-pills pull-right">
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;' . __('New Slider'), array('action' => 'add'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-sort"></span>&nbsp;&nbsp;' . __('Reorder'), array('action' => 'reorder'), array('escape' => false)); ?></li>
					</ul>
								<h1><?php echo __('Sliders'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->

		<div class="col-md-9">
			<div id="sortableSliders" class="list-group" data-reorder-url="/admin/sliders/reorder">
				<?php foreach ($sliders as $item) {?>
					<div class="list-group-item" data-item-id="<?php echo h($item['Slider']['id']); ?>">
						<span class="glyphicon glyphicon-move" aria-hidden="true"></span>
						<img src=<?php echo $item['Slider']['url']; ?> width="170" height="90" alt="" />
						<?php echo $this->Html->link($item['Slider']['title'], array('action' => 'index', $item['Slider']['id'])); ?>					</div>
				<?php } ?>
			</div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->

</div>
