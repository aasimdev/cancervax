<?php
$GLOBALS['title'] = "Newsroom - CancerVax";
$GLOBALS['desc'] = "";
$videos = include "data/podcast-data.php";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="marketbanner" style="background-image: url(./assets/img/new-bg.jpg);">
    <div class="container">
        <h1>Newsroom</h1>
    </div>
</section>

<section class="news">
    <div class="container">
        <h4>Press Releases</h4>
        <div class="row">
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="top-biotech-exec-joins-cancervax-as-chief-scientific-advisor.php"></a>
                    <span>February 27, 2025 </span>
                    <h3>Top Biotech Exec Joins CancerVax as Chief Scientific Advisor</h3>
                    <p>CancerVax, Inc., the developer of a revolutionary universal cancer treatment platform that will use the body’s immune system to treat cancer, announced today that Sumant Ramachandra, MD, PhD, MBA and founder of SR Global Health, LLC, a healthcare advisory firm, will serve as the Company’s new Chief Scientific Advisor</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-announces-successful-tests-of-its-smart-mrna-technology.php"></a>
                    <span>February 25, 2025</span>
                    <h3>CancerVax Announces Successful Tests of its Smart mRNA Technology</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform that will use the body’s immune system to treat cancer, today announced the successful functional validation of its innovative Smart mRNA (messenger RNA) technology in lab tests</p>
                </div>
            </div>
       
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-targets-hard-to-treat-pancreatic-cancer.php"></a>
                    <span>December 11, 2024 </span>
                    <h3>CancerVax Targets Hard to Treat Pancreatic Cancer</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform that will use the body’s immune system to treat cancer, announced today that the Company has selected Pancreatic Ductal Adenocarcinoma (PDAC) as one of its first targets for preclinical development</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="dr-george-katibah-to-serve-as-the-company-chief-scientific-officer.php"></a>
                    <span> November 19, 2024 </span>
                    <h3>Dr. George Katibah to serve as the Company’s Chief Scientific Officer</h3>
                    <p> CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that will use the body’s immune system to treat cancer, announced today that Dr. George Katibah will serve as the company’s Chief Scientific Officer</p>
                </div>
            </div>
        </div>
        <div class="news-see-archive">
            <a href="/news-archive">See All</a>
        </div>


    </div>
</section>
<!-- <section class="news">
    <div class="container">
        <h4>Major Press Releases</h4>
        <div class="row">
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="ucart-announcement.php"></a>
                    <span>September 12, 2023 </span>
                    <h3>CancerVax Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancervax-reports-significant-progress-on-universal-cancer-vaccine-development-at-ucla.php"></a>
                    <span>June 27, 2023</span>
                    <h3>CancerVax Reports Significant Progress on Universal Cancer Treatment Development at UCLA</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancerax-reports-positive-progress-on-kids-cancer-immunotherapy-treatment.php"></a>
                    <span>June 12, 2023</span>
                    <h3>CancerVax Reports Positive Progress on Kids Cancer Immunotherapy Treatment </h3>
                </div>
            </div>

        </div>
    </div>
</section> -->


<section class="nCommentary">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>News Commentary</h3>
            <!-- <a href="#">See All</a> -->
        </div>
        <div class="row">
            <?php
            $filteredlatestNewsCommentary = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary' && $item['scope'] === 'public';
            });
            $filteredLatestNewsCommentry = array_slice($filteredlatestNewsCommentary, 0, 3);
            foreach ($filteredLatestNewsCommentry as $video) {
                echo "<div class=\"col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box\">
                <a href=\"videos/news-commentary/{$video['slug']}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p>{$video['date']} - {$video['title']}</p>
                </div>
                </div>";
            }
            ?>



        </div>
    </div>
</section>









<?php
include('footer.php'); ?>