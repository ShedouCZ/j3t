<div class="photos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Photos'), array('action'=>'index'), array('escape'=>false)); ?></li>
				</ul>
				<h1><?php echo __('Admin Add Photo'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Photo', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('title', array('class'=>'form-control', 'placeholder'=>__('Title')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('garden_id', array('empty' => true, 'class'=>'form-control', 'placeholder'=>__('Garden Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('calendar_item_id', array('empty' => true, 'class'=>'form-control', 'placeholder'=>__('Calendar Item Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created', array(
						'type' => 'text',
						'data-provide' => 'datepicker',
						'data-date-language' => Configure::read('Config.locale'),
						'class' => 'form-control',
						'label' => __('Date'),
						'placeholder' => __('Date'),
						'inputGroup' => array('append'=>'glyphicon-th'),
						//BEWARE: datepicker needs JS initialization
					));?>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
