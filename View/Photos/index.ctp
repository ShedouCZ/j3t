<h1><?php echo __('Gallery'); ?></h1>

<p>Velikost 90 x 60 cm, napnuté plátno, doba dodání 14 dnů po zaplacení. Maximálně 3 kusy z každé fotografie.
Cena 15 000 kč včetně poštovného.
50% z utržené částky bude věnováno opavskému <a href="http://www.animaviva.cz/centrum.php">Komunitnímu centru</a>
</p>

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
