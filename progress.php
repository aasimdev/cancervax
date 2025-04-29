<?php
$GLOBALS['title'] = "Progress - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="pipelinebanner">
    <div class="container">
        <h1>Progress</h1>
    </div>
</section>

<section class="graph">
    <div class="container">
        <div class="graph-wrap">
            <img src="./assets/img/graph.png" class="d-none d-md-block" alt="graph">
            <img src="./assets/img/graph-mobile.png" class="d-md-none" alt="graph">
            <a href="#children-cancer" style="     display: inline-block;
    position: absolute;
    left: 0;
    top: 25%;
    width: 24%;
    height: 18.5%;"></a>
            <a href="#ucvp" style="     display: inline-block;
    position: absolute;
    left: 0;
    top: 44%;
    width: 24%;
    height: 26%;"></a>
            <a href="#uctcp" style="
    display: inline-block;
    position: absolute;
    left: 0;
    top: 70%;
    width: 24%;
    height: 26%;
"></a>
        </div>

        <ul class="theme-list mt-5 ">
            <li>Filed multiple patent applications </li>
            <li> Designed several Smart mRNAs for targeting multiple cancer types​</li>
            <li> Lab tests successfully validated Smart mRNAs worked in actual cancer cells (Q1 2025)</li>
            <li> Complete full nanoparticle for pancreatic cancer (Q3 2025)</li>
            <li> Complete animal studies to determine toxicity and efficacy of pancreatic cancer treatment  (Q1 2026)</li>
        </ul>
    </div>
</section>

<section class="dev-milestones">
    <div class="container">
        <div class="dev-milestones-head">
            <h2>Major Development Milestones</h2>
        </div>
        <div class="dev-milestones-body">
            <h5>February 25, 2025 – Smart mRNA Works!</h5>
            <div class="row">
                <div class="col-lg-7">
                    <p>Smart mRNA turned <strong class="text-decoration-underline">ON</strong> in <br> cancer cells only
                    </p>
                    <div class="dev-milestone-img">
                    <img src="./assets/img/fluorescene-microscopy.png?v=<?php echo filemtime('./assets/img/fluorescene-microscopy.png'); ?>" alt="fluorescene-microscopy">
                    </div>
                    <div class="text-center mt-5">
                    <a href="/webinar" class="theme-btn">View Webinar</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p>Smart mRNA turned <strong class="text-decoration-underline">OFF</strong> <br> in healthy cell line (HEK293)</p>
                    <div class="dev-milestone-img">
                    <img src="./assets/img/gfp-smart-mrnas-cropped.png?v=<?php echo filemtime('./assets/img/gfp-smart-mrnas-cropped.png'); ?>" alt="fluorescene-microscopy">
                    </div>
                    <div class="text-center mt-5">
                    <a href="https://cancervax.com/cancervax-announces-successful-tests-of-its-smart-mrna-technology.php" class="theme-btn">View Press Release</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
include('footer.php'); ?>