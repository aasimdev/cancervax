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

            <a href="#ucv" style="    display: inline-block;
    position: absolute;
    left: 0;
    top: 40%;
    width: 216px;
    height: 103px;"></a>
            <a href="#ewing-s" style="
    display: inline-block;
    position: absolute;
    left: 0;
    top: 67%;
    width: 216px;
    height: 103px;
"></a>
        </div>
    </div>
</section>


<section class="pipeline-steps">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="pstep">
                    <div class="pstep-head">
                        <span>Step 1</span>
                        <h4>Discovery</h4>
                        <div class="pstep-count">
                            1
                        </div>
                    </div>
                    <p>The discovery phase involves identifying and characterizing potential drug candidates to find a molecule that can treat a disease.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pstep">
                    <div class="pstep-head">
                        <span>Step 2</span>
                        <h4>Optimization</h4>
                        <div class="pstep-count">
                            2
                        </div>
                    </div>
                    <p>The optimization process culminates in identifying a “lead candidate” or preclinical candidate. Through a series of in-vitro tests, the most promising series of drugs are identified. From this series hit-to-lead efforts take place eventually allowing a lead to be nominated to advance for preclinical testing.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pstep">
                    <div class="pstep-head">
                        <span>Step 3</span>
                        <h4>Pre-clinical</h4>
                        <div class="pstep-count">
                            3
                        </div>
                    </div>
                    <p>The pre-clinical process of drug development involves testing the safety and efficacy of potential drug candidates in laboratory and animal models to determine their potential for use in humans.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pstep">
                    <div class="pstep-head">
                        <span>Step 4</span>
                        <h4>Clinical</h4>
                        <div class="pstep-count">
                            4
                        </div>
                    </div>
                    <p>The clinical process of drug development involves testing the safety and efficacy of potential drug candidates in human subjects through a series of carefully controlled and regulated clinical trials.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pipelinec" id="ucv">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="pipelinec-text">
                    <h3>Universal Cancer Vaccine​</h3>
                    <p>CancerVAX is developing a Universal Cancer Vaccine (UCV) that uses cutting-edge bioengineering and molecular technologies to uniquely detect, mark and kill only cancer cells. By forcing cancer cells to express a unique marker that healthy cells do not have, custom antibody drugs and the body’s immune system can target and destroy them with precision. Additionally, we intended to make cancer cell express protein markers associated with known diseases such as COVID, tetanus or measles. By doing so, we hope to leverage the body’s immune system to easily destroy cancer cells as if they were previous vaccinated common diseases. We have filed a patent application for the UCV and are partnering with the UCLA Jonsson Comprehensive Cancer Center to develop the platform, which may be administered as a one or two-shot treatment.</p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0">
                <div class="pipelinec-img">
                    <img src="./assets/img/ucv.jpg" alt="ucva">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pipelinec" id="ewing-s">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="pipelinec-text">
                    <h3>Ewing Sarcoma</h3>
                    <p>CancerVAX is developing a disease-specific immunotherapy targeted at treating Ewing Sarcoma, a rare but deadly bone and soft tissue cancer that affects children and young adults. There are currently no treatment options available for recurrence of Ewing Sarcoma. This research is lead by a team of professors and physicians who run the Ewing Sarcoma Program at the UCLA Jonsson Comprehensive Cancer Center.</p>
                    <p>Facts:</p>
                    <ul class="theme-list">
                        <li> It is the 2nd most common type of bone cancer in children</li>
                        <li> About 200 children and young adults are diagnosed each year in the United States</li>
                        <li> Survival rate of 55-65% if the disease is localized when diagnosed</li>
                        <li> Survival rate of 20-35% if the disease has spread when diagnosed</li>
                        <li> No treatment options are currently available for recurrence</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0">
                <div class="pipelinec-img">
                    <img src="./assets/img/ewing-sarcoma.jpg" alt="ucva">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php'); ?>