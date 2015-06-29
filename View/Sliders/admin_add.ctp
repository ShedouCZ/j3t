<div class="sliders form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
									<ul class="nav nav-pills pull-right">
							<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Sliders'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
								<h1><?php echo __('Admin Add Slider'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Slider', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('title', array('class'=>'form-control', 'placeholder'=>__('Title')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desc', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Desc')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ord', array('class'=>'form-control', 'placeholder'=>__('Ord')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('style', array('data-provide'=>'wysiwyg', 'class'=>'form-control', 'placeholder'=>__('Style')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('url', array('class'=>'form-control', 'placeholder'=>__('Url')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('page', array('class'=>'form-control', 'placeholder'=>__('Page')));?>
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
