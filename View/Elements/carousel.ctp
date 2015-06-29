<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1" class=""></li>
        <li data-target="#home-carousel" data-slide-to="2" class=""></li>
    </ol>
    <?php
      $sliders = $this->requestAction(
        'sliders/index/sort:ord/direction:asc/'
      );
    ?>
    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php foreach ($sliders as $i => $slider): ?>
                <?php
                    $class = '' ;
                    if ($i == 0) { $class = 'active'; };
                ?>
                <div class="item <?php echo $class; ?>">
                    <img src=<?php echo $slider['Slider']['url']; ?> width="1140" height="430"/>
                    <div class="carousel-caption">
                        <h1>
                            <?php
                              $title = $slider['Slider']['title'];
                              $page = $slider['Slider']['page'];
                              echo $this->Html->link($title, $page);
                            ?>
                        </h1><br>
                        <span>
                            <i>
                                <?php echo $slider['Slider']['desc']; ?>
                            </i>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



    <!-- Controls -->
    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
        <span class="arrow-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
        <span class="arrow-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
