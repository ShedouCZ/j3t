<?php $this->Html->script(
  array(
    '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js',
    'Gallery.lib/modernizr',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.3.0.2/js/jquery.swipebox.min.js',
    //'Gallery.interface',
  ),
  array('block' => 'js')
); ?>

<?php $this->Html->css(array(
    'Gallery.style',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.3.0.2/css/swipebox.min.css',
  ),
  array('block' => 'css'))?>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php echo $this->Gallery->showroomTmpl($album) ?>
        </div>
    </div>
</div>
