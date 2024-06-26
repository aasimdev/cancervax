<?php
$GLOBALS['title'] = "CancerVax - Immunotherapy";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videosCEOPodcast = include "data/podcast-data.php";
$videos = include "data/carousel-videos.php";
include('header.php'); ?>


<section class="banner">
    <div class="video">
        <video playsinline autoplay muted loop preload="none" poster="./assets/img/banner-video-poster.png">
            <source src="./assets/video/banner-bg.mp4" type="video/mp4">
        </video>
    </div>
    <div class="particles">
        <div id="particles-js" class="particleinn"></div>
    </div>
    <div class="banner__content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-text">
                        <h1> Creating a Better Way <br> to Treat Cancer <br> <span>Universal Cancer Vaccine</span></h1>
                        <div class="banner-announcement d-lg-none">
                            <h4>Breaking News</h4>
                            <p>CancerVax Announces Promising New Drug to Treat a Deadly Children’s Cancer</p>
                            <a href="cancervax-announces-promising-new-drug-to-treat-a-deadly-children-cancer.php" class="theme-btn">Learn More</a>
                        </div>
                        <div class="banner-video d-lg-none">
                            <div class="banner-thumbnail">
                                <img src="https://i.ytimg.com/vi/2OHGmKOqOYE/maxresdefault.jpg" alt="thumbnail">
                            </div>
                            <a href="http://www.youtube.com/watch?v=2OHGmKOqOYE" class="theme-btn text-uppercase popup-youtube">
                                <i class="far fa-play-circle"></i>
                                <span>Watch video</span>
                            </a>
                        </div>
                        <p>Working with a world-class team of experienced cancer researchers and physicians at UCLA, we are creating a breakthrough Universal Cancer Vaccine platform (UCV).</p>
                        <p> This cancer treatment is designed to be customizable, be administered as a shot, and leverage state-of-the-art bioengineering and molecular technologies.</p>
                        <p> Our innovative approach detects, marks, and kills cancer cells exclusively. By inducing cancer cells to express a distinct marker absent in healthy cells, custom antibody drugs and the body's immune cells can precisely target and eradicate cancer cells.</p>
                        <p> Cancer is the second leading cause of death in the US, following heart disease. While we don’t have a solution to prevent cancer, our objective is to develop our Universal Cancer Vaccine platform so that it can be customized to treat a broad spectrum of cancer types and substantially decrease the number of cancer-related fatalities.</p>


                        <!-- <div class="banner-video">
                            <div class="banner-thumbnail">
                                <img src="https://i.ytimg.com/vi/IySdl6Eo0rw/maxresdefault.jpg" alt="thumbnail">
                            </div>
                            <a href="http://www.youtube.com/watch?v=IySdl6Eo0rw" class="theme-btn text-uppercase popup-youtube">
                                <i class="far fa-play-circle"></i>
                                <span>Watch video</span>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-announcement d-none d-lg-block">
                        <h4>Breaking News</h4>
                        <p>CancerVax Announces Promising New Drug to Treat a Deadly Children’s Cancer</p>
                        <a href="cancervax-announces-promising-new-drug-to-treat-a-deadly-children-cancer.php" class="theme-btn">Learn More</a>
                    </div>
                    <div class="banner-video d-none d-lg-block">
                        <div class="banner-thumbnail">
                            <img src="https://i.ytimg.com/vi/2OHGmKOqOYE/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=2OHGmKOqOYE" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <div class="banner-object">
                        <div class="objectd">
                            <img src="./assets/img/banner-object.png" alt="object">
                        </div>

                    </div>
                </div>
            </div>
            <div class="developed-logo">
                <p>Working with &nbsp;</p>
                <img src="./assets/img/ucla.png" alt="UCLA">
            </div>
        </div>
    </div>

</section>

<div class="devPlan">
    <div class="container">
        <div class="devPlan-wrap">
            <div class="devPlan-heading">
                <h3>Our Development Pipeline</h3>
                <p>In addition to our Universal Cancer Vaccine platform, we are also working with UCLA to create two other immunotherapy technologies.</p>
            </div>
            <div class="devPlan-item">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="devPlan-graphic">
                            <img src="./assets/img/children-cancer.png" alt="cancer">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="devPlan-conten">
                            <h6>Children’s Cancer</h6>
                            <p>We have created our first cancer drug candidate – a single-disease specific immunotherapy targeting Ewing sarcoma, a rare but deadly bone and soft tissue cancer primarily affecting children and young adults. Unfortunately, the death rate for patients with recurrent Ewing sarcoma is nearly 100%. ​

                                ​<br><br>

                                Based on the positive data, we plan to launch FDA IND enabling studies needed to apply for approval to proceed with human trials. We look forward to the day when treating cancer will be as simple as getting a flu shot – a better way to treat cancer. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="devPlan-item">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="devPlan-graphic">

                            <img src="./assets/img/universal-cart.png" alt="cancer">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="devPlan-conten">
                            <h6>Universal CAR-T Cell Platform (UCAR-T) </h6>
                            <p>Our UCAR-T Cell platform is a novel and customizable low-cost cancer treatment platform, delivered as a shot, that can reprogram natural immune T-cells inside the body to seek and destroy targeted cancer cells. These modified T-cells are called Chimeric Antigen Receptor (CAR) T Cells. Conventional CAR-T Cell therapy can cost more than $500,000 per dose due to complicated and expensive lab processes. Our goal is to lower the cost to a few thousand dollars per dose by helping the body make its own CAR T cells.
                                 <br><br>
                                Our Universal Cancer Vaccine platform and our UCAR-T Cell platform can be used separately, however, when used together, we believe that we can kill cancer cells with extreme precision using the body’s immune system at very low costs. Our Universal Cancer Vaccine platform detects and marks a unique target and our UCAR-T Cell platform makes T-cells that attack that target.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="devPlan-item">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="devPlan-graphic">
                            <img src="./assets/img/ucv-platform.png" alt="cancer">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="devPlan-conten">
                            <h6>Universal Cancer Vaccine​ Platform (UCV)</h6>
                            <p>A novel and customizable Universal Cancer Vaccine, to be delivered as a shot, that uses cutting-edge bioengineering and molecular technologies to uniquely detect, mark and kill only cancer cells. By forcing cancer cells to express a unique marker not found in healthy cells, custom antibody drugs and the body’s immune cells can target and destroy the cancer cells with precision. </p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="devPlan-heading pt-4">
                <p>UCV and UCAR-T can be used separately. However, when used together, we can kill cancer cells with extreme precision using the body’s immune system at very low costs. UCV detects and marks a unique target and UCAR-T makes T-cells attack that target.</p>
            </div>
        </div>
    </div>
</div>

<div class="ctreament">
    <div class="container">
        <div class="ctreament-wrap">
            <div class="ctreament-heading">
                <h3>Massive Market Opportunity</h3>
            </div>
            <div class="market-opp">
                <div class="row pt-md-5 pt-3 align-items-center">
                    <div class="col-lg-8">
                        <h4>How big is the biotechnology market?</h4>
                        <p>According to Precedence Research, the global biotechnology market is projected to grow from $1.3 trillion in 2023 to <span>$3.2 trillion by 2030</span>
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="market-opp-box">
                            <span>Biotech <br>
                                $3.2 trillion</span>
                        </div>
                    </div>
                </div>
                <div class="row pt-md-4 pt-3 align-items-center">
                    <div class="col-lg-8">
                        <h4>How big is the cancer drug development market?</h4>
                        <p>According to Fortune Business Insights, the global oncology drugs market is projected to grow from $205 billion in 2023 to <span>$484 billion by 2030</span>.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="market-opp-box">
                            <span>Cancer <br>
                                $484 billion</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <ul class="ctreament-list">
                <li> Former UCLA Faculty, Patrick Soon-Shiong, sold Abraxis BioSciences, a Developer of Cancer Chemotherapy, for $2.9 Billion to Celgene.</li>
                <li> Sumitomo Dainippon Pharma Acquires Tolero Pharmaceuticals, a Developer of Cancer Therapies, for $780 million.</li>
                <li> AbbVie Buys Cancer Drug Startup Stemcentrx, a Developer of Cancer Therapies, for $10.2 Billion.</li>
                <li> Boston Biomedical, a Developer of Cancer Therapies, is Acquired by Dainippon Sumitomo Pharma for $2.63 Billion.</li>
                <li>
                    Juno Therapeutics, A Developer of Cancer Therapies, raises $310 Million Valuing the Company at $1.8 Billion.</li>
                <li> Astellas Acquires Ganymed Pharmaceuticals, a Developer of Cancer Therapies, for $1.46 Billion.</li>
            </ul> -->
        </div>
    </div>
</div>

<section class="pvRecent pt-5 pb-4">
    <div class="ceochats-carousel">
        <?php

        foreach ($videos as $video) :
            $categoryName = ucwords(str_replace('-', ' ', $video['category']));
            if ($video['category'] === "ceo-podcast") {
                $categoryName = "Podcast";
            }
        ?>
            <div class="cchat">
                <div class="cchat-box">
                    <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=<?= $video['videoID'] ?>"></a>
                    <div class="cchat-thumbnail thumbnail-overlay">
                        <img src="//img.youtube.com/vi/<?= $video['videoID'] ?>/maxresdefault.jpg" alt="Thumbnail">
                    </div>
                    <i class="far fa-play-circle"></i>
                </div>
                <p><?= $categoryName ?> - <?= $video['title'] ?></p>

            </div>
        <?php endforeach; ?>
    </div>
</section>





<section class="newsletter home-newsletter">
    <div class="container">
        <div class="newsletter-wrap">
            <h2>SUBSCRIBE</h2>
            <p>Keep up with our progress by subscribing to our email newsletter!</p>
            <!-- <form action="./php/subscriber.php" method="POST" id="subscriber-form">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your email address...">
                <button type="submit">Subscribe</button>
            </form> -->
            <div id="icontactSignupFormWrapper956">
                <script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=956&cid=1868283&lid=5400&divid=icontactSignupFormWrapper956"></script>
            </div>
        </div>
    </div>
</section>

<div class="divider-section"></div>

<section class="redefining">
    <div class="container">
        <div class="redefining-text">
            <span>CancerVax</span>
            <h2> redefining <br> immunotherapy</h2>
        </div>
    </div>
</section>

<section class="pclinical">
    <video playsinline autoplay muted loop class="pclinical-video" preload="none" poster="./assets/img/banner-video-poster.png">
        <source src="./assets/video/blue-streaks.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="pclinical-wrap">
            <h3>
                <span>Pre-clinical.</span> We’re developing cutting edge immunotherapy cancer treatments that use
                the body’s
                immune system to fight cancer.
            </h3>
        </div>
    </div>
</section>



<!-- <section class="fcancervax">
    <div class="container">
        <div class="fcancervax-box">
            <h4>Universal Cancer Vaccine</h4>
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="fcancervax-text">
                        <h5>Universal Cancer Vaccine</h5>
                        <p>We are developing a Universal Cancer Vaccine (UCV) that will use the body’s own immune
                            system to target and eliminate cancer cells. The UCV will use cutting edge
                            bioengineering and molecular technologies to uniquely detect, mark and kill only cancer
                            cells. By forcing cancer cells to express a unique marker that healthy cells do not
                            have, custom antibody drugs and the body's immune system can target and destroy them
                            with precision. Additionally, we intend to make cancer cells look like common diseases so
                            that the body’s immune system can easily destroy them. We have filed a patent
                            application for the UCV and are working with UCLA to develop the platform, which may
                            be administered as a one or two-shot treatment.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-0">
                    <div class="fcancervax-img">
                        <img src="./assets/img/cells_syringe.jpg" alt="syringe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fcancervax girlfCancervax">
    <div class="container">
        <div class="fcancervax-box">
            <h4>Ewing Sarcoma</h4>
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="fcancervax-text">
                        <h5>Ewing Sarcoma</h5>
                        <p>We are developing a disease-specific immunotherapy targeted at treating Ewing Sarcoma, a
                            rare but deadly bone and soft tissue cancer that primarily affects children and young
                            adults and for which there is no current FDA approved treatment for recurrence.
                            <br><br>
                            We have entered into a sponsored research agreement with the University of California at
                            Los Angeles (UCLA) to develop effective immunotherapies, such as CAR T-cell and
                            monoclonal antibodies, for Ewing Sarcoma. We have the exclusive right to negotiate and
                            license any resulting intellectual property and have also entered into a Letter of
                            Intent with UCLA to negotiate a license for a pre-existing patent application. UCLA is a
                            top-ranked university known for its cancer research and medical school.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-0">
                    <div class="fcancervax-img float-animation cgirlimg">
                        <img src="./assets/img/girl_cancervax.jpg" alt="syringe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="worldhealth">
    <div class="container">
        <div class="worldhealth-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="worldhealth-text">
                        <h3>World-class researchers and scientists. </h3>
                        <p>Our team of dedicated scientists is on the cutting edge of cancer research. From the lab
                            to
                            the clinic, we are committed to finding new and better ways to prevent and treat cancer.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="worldhealth-counter">
                        <div class="cancervax-counter">
                            <div class="counter">
                                <span>80</span>
                            </div>
                            <p>Years of collective <br> experience</p>
                        </div>
                        <img src="./assets/img/ucla-health.png" alt="health">
                    </div>
                </div>
            </div>
        </div>

        <div class="team">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
                <div class="col">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="javascript:void(0)">
                                <img src="./assets/img/john.png" alt="john">
                            </a>
                        </div>
                        <h5>
                            Steven J. Jonas, MD/PHD
                        </h5>
                        <p>
                            Principal Investigator
                        </p>

                        <div class="team-description">
                            <p>Dr. Jonas is a UCLA physician-scientist specializing in pediatric
                                hematology/oncology. He received a bachelor’s degree in materials science &
                                engineering and a master’s degree in biomedical engineering prior to starting his
                                medical training to pursue his M.D. and Ph.D. degrees at UCLA through its
                                NIH-supported Medical Scientist Training Program. He leads a multidisciplinary
                                research team that targets the development and application of new nanotechnologies
                                and methods to support the childhood cancer and regenerative medicine communities in
                                accelerating the discovery of innovative gene therapy approaches.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/satiro.jpg" alt="john">
                            </a>
                        </div>
                        <h5>
                            Satiro De Oliveira, MD
                        </h5>
                        <p>
                            Principal Investigator
                        </p>


                        <div class="team-description">
                            <p>Dr. De Oliveira is a board-certified pediatrician and board-certified pediatric
                                hematology/oncologist. He received his medical degree in Brazil and completed his
                                pediatric residency at Woodhull Medical and Mental Health Center in New York and his
                                pediatric hematology/oncology fellowship at the Children’s Hospital Los Angeles.
                                His clinical focus is on pediatric oncology and gene therapies and his research
                                focus is on cancer immunotherapy and biology of stem cell transplantation.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/seet.jpg" alt="john">
                            </a>
                        </div>
                        <h5>
                            Christopher Seet, MD/PHD
                        </h5>
                        <p>
                            Principal Investigator
                        </p>
                        <div class="team-description">
                            <p>Dr. Seet is a hematologist and oncologist subspecializing in the treatment of
                                hematologic malignancies, including hematopoietic stem cell transplantation,
                                cellular therapy and clinical trials of novel therapeutics. He received a
                                undergraduate degree in Biological Science at the University of Chicago, a medical
                                degree at the University of Sydney, Australia and PhD in Cellular and Molecular
                                Pathology at UCLA. His research focuses on human T cell and dendritic cell tumor
                                immunology, and the development of engineered stem cell-based approaches to cancer
                                therapy.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/noah.jpg" alt="john">
                            </a>
                        </div>
                        <h5>
                            Noah Federman, MD
                        </h5>
                        <p>
                            Principal Investigator
                        </p>
                        <div class="team-description">
                            <p>Dr. Federman is the Director of the Pediatric Bone and Soft Tissue Sarcoma Program at
                                UCLA. He specializes in treating children, adolescents and young adults with these
                                aggressive cancers. He runs a multidisciplinary program involving pediatric and
                                medical oncologists, radiation oncologists, orthopedic oncology surgeons,
                                musculoskeletal radiologists and pathologists, nuclear medicine specialists,
                                physical therapists and prosthetic specialists. He received a medical degree from
                                the Icahn School of Medicine at Mount Sinai and completed his residency and
                                fellowship at UCLA.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/christopher.jpg" alt="john">
                            </a>
                        </div>
                        <h5>
                            Christopher Denny, MD
                        </h5>
                        <p>
                            Project Advisor
                        </p>
                        <div class="team-description">
                            <p>Dr. Denny has served as a physician at UCLA for over 3 decades primarily focused on
                                pediatric oncology. He has trained and mentored some of UCLA’s best and brightest
                                scientists and doctors in the field. Dr. Denny received a bachelor’s degree from
                                University of Pennsylvania and a medical degree from the University of Pennsylvania
                                School of Medicine. He completed his residency at the Children’s National Medical
                                Center and fellowship at the National Institutes of Health Clinical Center. Most of
                                Dr. Denny’s academic success has come through applying basic molecular biology tools
                                to seek molecular mechanisms for what he witnesses when treating pediatric
                                hematology/oncology patients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ceochats">
    <div class="container">
        <div class="ceochats-heading">
            <span>CancerVax</span>
            <h2>Podcast</h2>
        </div>

        <div class="row">
            <?php
            $filteredlatestCeoPodcast = array_filter($videosCEOPodcast, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });
            $latestCeoPodcast = array_slice($filteredlatestCeoPodcast, 0, 4);
            foreach ($latestCeoPodcast as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "<div class=\"col-lg-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box mb-4\">
                <a href=\"videos/ceo-podcast/{$string}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p class=\"mt-0\">{$video['date']} - {$video['title']}</p>
                </div>
                </div>";
            };
            ?>

        </div>
    </div>

</section>



<section class="newshighlight">
    <div class="container">
        <h4>News Highlights</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-launches-5-million-funding-round.php"></a>
                    <span> April 3, 2024 </span>
                    <h3>CancerVax Launches $5 Million Funding Round </h3>
                    <p> CancerVax, Inc., developer of a breakthrough Universal Cancer Vaccine treatment that will use the body’s immune system to fight cancer, today announced that its Reg A+ offering has been qualified by the SEC allowing the Company to formally launch a funding round of up to $5 million. Proceeds from the SEC qualified Reg A+ offering will be used by the Company to continue work on its breakthrough cancer treatments </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discusses-cancer-drug-development-with-dr-ezra-cohen.php"></a>
                    <span>November 2, 2023 </span>
                    <h3>CancerVax CEO Ryan Davies Discusses Cancer Drug Development with Dr. Ezra Cohen</h3>
                    <p> CancerVax, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, and Tempus Labs Chief Medical Officer for Oncology Dr. Ezra Cohen, discussed his time at Tempus Labs, Moores Cancer Center and University of Chicago </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="ucart-announcement.php"></a>
                    <span>September 12, 2023 </span>
                    <h3>CancerVax Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                    <p> CancerVax, Inc., a pre-clinical biotechnology company working with UCLA to develop breakthrough immunotherapy cancer treatments that use the body’s immune system to fight cancer, today announced an expansion of its development pipeline to include a Universal CAR-T Cell Platform that can dramatically lower the cost of CAR-T cell cancer therapies</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discussed-cancer-immunotherapy-with-ucla-physician-scientist.php"></a>
                    <span>August 24, 2023 </span>
                    <h3>CancerVax CEO Ryan Davies Discussed Cancer Immunotherapy with UCLA Physician-Scientist</h3>
                    <p>CancerVax, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, spoke with and UCLA cancer physician and researcher, Dr. Steven Jonas, about his journey to becoming both a practicing cancer doctor and active cancer researcher</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php
include('footer.php'); ?>