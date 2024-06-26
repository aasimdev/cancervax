<?php
$GLOBALS['title'] = "Pipeline - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="pipelinebanner">
    <div class="container">
        <h1>Pipeline</h1>
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
    </div>
</section>

<section class="pC-pipeline">
    <div class="container">
        <div class="pC-pipeline-item" id="children-cancer">
            <h4>Children’s Cancer</h4>
            <p>Working with a team of cancer researchers and physicians who run the Ewing Sarcoma Program at the UCLA Jonsson Comprehensive Cancer Center, we have created our first cancer drug candidate – a  single-disease specific immunotherapy targeting Ewing sarcoma, a rare but deadly bone and soft tissue cancer primarily affecting children and young adults. Based on the positive data, we plan to launch FDA IND enabling studies needed to apply for approval to proceed with human trials. We look forward to the day when treating cancer will be as simple as getting a flu shot – a better way to treat cancer. </p>

            <div class="row align-items-center mt-sm-4 mt-3 mb-0">
                <div class="col-lg-7">
                    <h5 class="">Facts:</h5>
                    <ul class="box-list">
                        <li>It is the 2nd most common type of bone cancer in children </li>
                        <li>About 200 children and young adults are diagnosed each year in the United States </li>
                        <li>Survival rate of 55-65% if the disease is localized when diagnosed </li>
                        <li>Survival rate of 20-35% if the disease has spread when diagnosed </li>
                        <li>No treatment options are currently available for recurrence, <span>meaning 100% death rate</span> </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="pC-pipeline-img">
                        <img src="./assets/img/ewing-sarcoma.jpg" alt="ucva">
                    </div>
                </div>
            </div>

        </div>
        <div class="pC-pipeline-item" id="ucvp">
            <h4 style="">Universal Cancer Vaccine​ Platform </h4>
            <div class="row">
                <div class="col-lg-7">
                    <p>We are developing a novel Universal Cancer Vaccine (UCV), to be delivered as a shot, that uses cutting-edge bioengineering and molecular technologies to <span>uniquely detect, mark and kill only cancer cells</span>. By forcing cancer cells to express a unique marker that healthy cells do not have, custom antibody drugs and the body’s immune system can target and destroy them with precision. Additionally, we intended to make cancer cell express protein markers associated with known diseases such as COVID, tetanus or measles. By doing so, we hope to leverage the body’s immune system to easily destroy cancer cells as if they were previous vaccinated common diseases. We have filed a patent application for the UCV and are working with the UCLA Jonsson Comprehensive Cancer Center to develop the platform, which may be administered as a one or two-shot treatment.</p>
                </div>
                <div class="col-lg-5">
                    <div class="pC-pipeline-img">
                        <img src="./assets/img/ucv.jpg" alt="ucva">
                        <a href="http://www.youtube.com/watch?v=zbnhGW5Zz4c" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pC-pipeline-item" id="uctcp">
            <h4>Universal CAR-T Cell Platform </h4>

            <div class="pC-pipeline-c">

                <div class="row">

                    <div class="col-lg-7">
                        <div class="pC-pipeline-text">
                            <p>Based on the foundational nanoparticle technology developed for UCV, we are developing a novel Universal CAR-T Cell therapy, to be delivered as a shot, that can reprogram natural immune T-cells inside the body to seek and destroy any targeted cancer cells.
                                <br><br>
                                CAR-T cell therapy is a type of FDA-approved immunotherapy in which a patient’s T-cells are genetically modified in the laboratory so they will bind to specific proteins (antigens) found on cancer cells and kill them. These modified T-cells are called Chimeric Antigen Receptor (CAR) T Cells. Conventional CAR-T Cell therapy can cost more than <span>$500,000 per dose</span> due to complicated and expensive lab processes. We believe we can dramatically <span>lower the cost to a few thousand dollars per dose</span> by simply helping the body make its own CAR T-cells.
                            </p>
                            <h6>Conventional CAR-T Cell Therapy Steps:</h6>
                            <ul class="count-list">
                                <li>A patient’s T cells are removed from their blood. </li>
                                <li> The gene for a special receptor called chimeric antigen receptor (CAR) is inserted into the T cells in the laboratory by gene editing. The gene forces the T cell to express a protein (receptor) on its surface that binds to the cancer cell’s surface protein (antigen). </li>
                                <li>Millions of CAR T cells are grown in the laboratory. </li>
                                <li> They are then given to the patient by intravenous infusion. </;>
                                <li>The CAR protein on the surface of the CAR T cells bind to antigens on the cancer cells and kill them. </li>
                            </ul>
                            <h6>CancerVax Envisioned CAR-T Cells Steps:</h6>
                            <ul class="count-list">
                                <li>Genetic codes for targeting specific proteins on cancer cells are loaded into a smart nanoparticle using an innovative high-speed, low-cost manufacturing process. </li>
                                <li>
                                    Millions of nanoparticles are injected into the patient as a shot. The nanoparticles attach to the patient’s natural T-cells inside the body, unload the genetic code, and reprogram the T-cells to target specific cancer cells and kill them. </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pC-pipeline-img">
                            <img src="./assets/img/pipeline-virus-2.png" class="img_pipeline" alt="pipeline-virus-2" data-bs-toggle="modal" data-bs-target="#pipeline-img-preview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
include('footer.php'); ?>