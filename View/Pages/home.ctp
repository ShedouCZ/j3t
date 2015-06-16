<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1" class=""></li>
        <li data-target="#home-carousel" data-slide-to="2" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item intro active">
            <img width="1140" height="430" src="/img/homepage.jpg" alt="slide-1" />
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item gardepass">
            <img width="1140" height="430" src="/img/vystava1.jpg" alt="slide-1" />
            <div class="carousel-caption">
                <h1><b>Garden</b> Pass</h1><br>
                <p>
                </p>
            </div>
        </div>
        <div class="item botanicka">
            <img width="1140" height="430" src="/img/vystava2.jpg" alt="slide-1" />
            <div class="carousel-caption">
                <h1><?php echo __("<b>Botanická</b> zahrada Praha"); ?></h1><br>
                <p>
                    <span><i>
                        <?php echo __("Oáza klidu, kde si odpočinete od shonu velkoměsta. V magické zahradě s dvaadvaceti tisíci druhy rostlin naleznete rozsáhlé venkovní expoziční plochy s Japonskou zahradou, Pivoňkovou loukou, expozicemi „Severoamerická polopoušť“ a historickou vinicí sv. Klára."); ?>
                    </i></span>
                </p>
                <?php echo $this->Html->image('slide_02.png'); ?>
            </div>
        </div>
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
