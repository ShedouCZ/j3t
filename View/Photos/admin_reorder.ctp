<div class="photos index">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
					<ul class="nav nav-pills pull-right">
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;' . __('New Photo'), array('action' => 'add'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-sort"></span>&nbsp;&nbsp;' . __('Reorder'), array('action' => 'reorder'), array('escape' => false)); ?></li>
					</ul>
								<h1><?php echo __('Photos'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->

		<div class="col-md-9">
			<div id="sortablePhotos" class="list-group" data-reorder-url="/admin/photos/reorder">
				<?php foreach ($photos as $item) {?>
					<div class="list-group-item" data-item-id="<?php echo h($item['Photo']['id']); ?>">
						<span class="glyphicon glyphicon-move" aria-hidden="true"></span>
						<?php echo $this->Html->link($item['Photo']['title'], array('action' => 'index', $item['Photo']['id'])); ?>					</div>
				<?php } ?>
			</div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->

</div>
