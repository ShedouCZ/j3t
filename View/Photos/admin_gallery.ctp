<?php $this->Html->script(
  array(
    'Gallery.lib/dropzone.min.js',
    'Gallery.scripts.js',
    '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js'
  ),
  array('block' => 'js')
); ?>

<?php $this->Html->css(array(
    'Gallery.dropzone',
    'Gallery.Locale/ces/dropzone',
    'Gallery.style'
  ),
  array('block' => 'css'))?>

<div class="photos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li><?php echo $this->Html->link('<span class="fa fa-cloud-upload"></span>&nbsp;&nbsp;' . __('Nahrát'), '#modalUpload', array('escape' => false, 'data-toggle'=>'modal')); ?></li>
					<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete'), '/gallery/albums/delete/' . $id, array('escape'=>false), __('Are you sure you want to delete # %s?', $id)); ?></li>
				</ul>
				<h1><?php echo __('Admin Edit Photo'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<div class="">
				<?php echo $this->requestAction('/gallery/upload/' . $id, array('return')); ?>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
