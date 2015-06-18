<div class="item active" style="position:relative">
    <img width="1140" height="430" src="/img/slide_01_bg.jpg" class=" wp-post-image" alt="slide-1" />
    <div class="carousel-caption" style="position:absolute; padding:0">
    </div>
</div>

<hr>

<h1><?php echo __('Gallery'); ?></h1>

<div class="row">
    <div class="col-md-12">
        <div class="row">

            <?php if (empty($photos)) { ?>
                <div class="container-empty">
                    <div class="img"><i class="fa fa-picture-o"></i></div>
                    <h2><?php echo __('Prozatím tu nejsou žádná alba'); ?></h2>
                </div>
            <?php } else { ?>
                <?php foreach ($photos as $photo) { ?>
                    <?php $gallery = $photo['Gallery']; ?>
                    <a
                        href="<?php echo $this->Html->url(
                            array(
                                'controller' => 'photos',
                                'action' => 'view',
                                'id' => $gallery['Album']['id']
                            )
                        ) ?>">
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <?php $picture_url = !empty($gallery['Picture'][0]['styles']['medium']) ? $gallery['Picture'][0]['styles']['medium'] : "http://placehold.it/255x170"; ?>
                                <img src="<?php echo $picture_url ?>" alt="...">

                                <div class="caption">
                                    <h4>
                                        <?php if ($gallery['Album']['status'] == 'draft') { ?>
                                            <i class="fa fa-pagelines"></i>
                                        <?php } else { ?>
                                        <?php } ?>
                                        <?php echo $photo['Photo']['title'] ?>
                                    </h4>
                                    <h5 class="pull-right" style="margin-top:0"><i class="fa fa-camera-retro"></i> <?php echo count($gallery['Picture']) ?></h5>
                                    <h5><i
                                            class="fa fa-calendar"></i> <?php echo $this->Time->format(
                                            $photo['Photo']['created'],
                                            '%e. %-m. %Y'
                                        ) ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>

<hr>

<div class="row">
    <?php echo $this->Form->create('Photo', array('role'=>'form', 'type'=>'get', 'class'=>'filter-on-change')); ?>
        <div class="col-sm-3">
            <?php echo $this->Form->input('garden_id', array('empty' => true, 'class'=>'form-control', 'placeholder'=>__('Zahrada')));?>
        </div>
        <div class="col-sm-3">
            <?php
                $seasons = array(
                    '0' => __('spring'),
                    '1' => __('summer'),
                    '2' => __('autumn'),
                    '3' => __('winter'),
                );
            ?>
            <?php echo $this->Form->input('season_id', array('options'=>$seasons, 'empty' => true, 'class'=>'form-control', 'label'=>__('Season'), 'placeholder'=>__('Season')));?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('calendar_item_id', array('empty' => true, 'class'=>'form-control', 'label'=>__('Event'), 'placeholder'=>__('Event')));?>
        </div>
        <div class="col-sm-3" style="margin-top:24px;  text-align:center">
            <?php
                if (!empty($this->request->data['Photo'])) {
                    echo $this->Form->submit(__('View All'), array('class'=>'btn btn-info', 'style'=>"width:90%", 'id'=>'all', 'name'=>'all'));
                } else {
                    echo $this->Form->submit(__('Filter'), array('class'=>'btn btn-info', 'style'=>"width:90%"));
                }
            ?>
        </div>
    <?php echo $this->Form->end() ?>
</div>
