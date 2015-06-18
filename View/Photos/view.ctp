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

<div class="item active" style="position:relative">
    <img width="1140" height="430" src="<?php echo $album['Picture'][0]['styles']['slide'] ?>" class=" wp-post-image" alt="slide-1" />
    <div class="carousel-caption" style="position:absolute; padding:0">
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-10">
        <h1><?php echo $album['Photo']['title'] ?></h1>
    </div>
    <div class="col-md-2">
        <?php
            if (0 && @$user_id) echo $this->Html->link(
                '<i class="fa fa-edit"></i> ' . __d('gallery', 'Edit album'),
                array(
                    'controller' => 'photos',
                    'action' => 'gallery',
                    $album['Album']['id'],
                    'admin' => true
                ),
                array(
                    'class' => 'btn btn-primary btn-sm pull-right',
                    'style' => 'margin-top: 20px',
                    'escape' => false
                )
            );
        ?>
        <?php
            echo $this->Html->link(
                '<i class="fa fa-reply"></i> ' . __('Back to List'),
                array(
                    'controller' => 'photos',
                    'action' => 'index',
                    'admin' => false
                ),
                array(
                    'class' => 'btn btn-primary btn-sm pull-right',
                    'style' => 'margin-top: 30px; margin-right:10px',
                    'escape' => false
                )
            );
        ?>
    </div>
</div>

<hr/>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php echo $this->Gallery->showroomTmpl($album) ?>
        </div>
    </div>
</div>
