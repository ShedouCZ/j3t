<style media="screen">
    .thumbnail {
        min-height: 247px;
    }
</style>
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

<h2>FOTOdoKOUPELNY</h2>

<p style="margin:20px 25px 45px 25px;">Velikost 50 x 33 cm, čistou vodou omyvatelný povrch,
    doba dodání 14 dnů po zaplacení.<br> Maximálně 10 kusů od každé fotografie.
Cena 6.000 kč plus DPH včetně poštovného.
</p>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php echo $this->Gallery->showroomTmpl($do_koupelny, $style='large', $i=58) ?>
        </div>
    </div>
</div>


<h2>NO STRESS!</h2>

<p style="margin:20px 25px 45px 25px;">Velikost 90 x 60 cm, napnuté plátno, doba dodání 14 dnů po zaplacení. Maximálně 3 kusy z každé fotografie.<br>
Cena 15.000 kč plus DPH včetně poštovného.
</p>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php echo $this->Gallery->showroomTmpl($no_stress, $style='large', $i=0) ?>
        </div>
    </div>
</div>
