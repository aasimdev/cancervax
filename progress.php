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
          
            <a href="cancervax-targets-hard-to-treat-pancreatic-cancer.php" style="
    display: inline-block;
    position: absolute;
       left: 2%;
    top: 68%;
    width: 24%;
    height: 10%;
"></a>
        </div>

        <ul class="theme-list mt-5 ">
            <li>Filed multiple patent applications
            </li>
            <li> Designed several Smart mRNAs for targeting multiple cancer types​</li>
            <li>Lab tests successfully validated Smart mRNAs worked in actual cancer cells (Q1 2025)</li>
            <li> Complete therapeutic nanoparticles for the above cancer indications (Q3 2025)</li>
            <li> Complete animal studies to determine toxicity and efficacy of the above cancer treatments (Q1 2026)</li>
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
                        <a href="cancervax-announces-successful-tests-of-itssmart-mrna-technology.php" class="theme-btn">View Press Release</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dev-milestones">
    <div class="container">
        <div class="dev-milestones-body">
            <h5>May 31, 2025 – Successfully Made Cell Targeting Nanoparticle!</h5>
            <div class="dev-white-bg lipid-nanoparticle-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="lipid-nanoparticle">
                            <img src="./assets/img/lipid-nanoparticle.png?v=<?php echo filemtime('./assets/img/lipid-nanoparticle.png'); ?>" alt="lipid-nanoparticle">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="theme-list">
                            <li>Independent analysis confirmed efficient and successful attachment of Marker1 onto lipid nanoparticles
                            </li>
                            <li>Marker1 is a molecule that will seek out  specific proteins on cancer cell surface and deliver our Smart mRNA payload
                            </li>
                            <li>Next step, we will put Smart mRNAs inside the nanoparticles to make  complete cancer targeting and killing nanoparticles. </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <div class="text-center mt-5">
                            <a href="/webinar" class="theme-btn">View Webinar</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                       
                        <div class="text-center mt-5">
                            <a href="#" class="theme-btn">View Press Release</a>
                        </div>
                    </div>
                </div>
           

        </div>
    </div>
</section>



<?php
include('footer.php'); ?>