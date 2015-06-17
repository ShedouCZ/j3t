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
                <h1><?php echo __("<b>NO STRESS!</b>"); ?></h1><br>
            </div>
        </div>
        <div class="item gardepass">
            <img width="1140" height="430" src="/img/vystava1.jpg" alt="slide-1" />
            <div class="carousel-caption">
                <h1><?php echo __("<b>O výstavě</b>"); ?><br>
                <p>
                </p>
            </div>
        </div>
        <div class="item botanicka">
            <img width="1140" height="430" src="/img/vystava2.jpg" alt="slide-1" />
            <div class="carousel-caption">
                <h1><?php echo __("<b>O výstavě</b>"); ?></h1><br>
                <p>
                    <span><i>
                        <?php echo __("Chtěli jsme zachytit ojedinělý ráj nedaleko Evropy, dokud nebude zničený všudepřítomnou uniformitou. Věříme, že fotografie minimálně mile zahřejí…."); ?>
                    </i></span>
                </p>
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
