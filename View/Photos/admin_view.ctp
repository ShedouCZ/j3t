<div class="photos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Photo'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Photo'), array('action' => 'edit', $photo['Photo']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Photos'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Photo'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Gardens'), array('controller' => 'gardens', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Garden'), array('controller' => 'gardens', 'action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Calendar Items'), array('controller' => 'calendar_items', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Calendar Item'), array('controller' => 'calendar_items', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<td>
							<?php echo h($photo['Photo']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Title'); ?></th>
						<td>
							<?php echo h($photo['Photo']['title']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('Garden'); ?></th>
								<td>
			<?php echo $this->Html->link($photo['Garden']['name'], array('controller' => 'gardens', 'action' => 'view', $photo['Garden']['id'])); ?>
			&nbsp;
		</td>
					</tr>
					<tr>
						<th><?php echo __('Created'); ?></th>
						<td>
							<?php echo h($photo['Photo']['created']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('Calendar Item'); ?></th>
								<td>
			<?php echo $this->Html->link($photo['CalendarItem']['title'], array('controller' => 'calendar_items', 'action' => 'view', $photo['CalendarItem']['id'])); ?>
			&nbsp;
		</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

