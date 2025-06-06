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
                    <a href="cancervax-targets-liver-cancers-to-further-showcase-flexibility-of-its-universal-platform.php"></a>
                    <span>June 9, 2025 </span>
                    <h3>CancerVax Targets Liver Cancers to Further Showcase Flexibility of Its Universal Platform</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform designed to use the body’s immune system to treat cancer, today announced that it will expand its preclinical program to include liver cancers, specifically rare stem cell-like forms of hepatocellular carcinoma (HCC) and intrahepatic cholangiocarcinoma (ICC). Patients with these stem cell-like tumors have a significantly worse survival than patients with more traditional liver tumors</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancerVax-achieves-major-milestone-with-successful-creation-of-cell-targeting-nanoparticle.php"></a>
                    <span>June 5, 2025 </span>
                    <h3>CancerVax Achieves Major Milestone with Successful Creation of Cell Targeting Nanoparticle</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform designed to use the body’s immune system to treat cancer, today announced the successful creation of its nanoparticle that can target specific cells that are potentially cancerous</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-scientists-featured-on-cytiva-discovery-matters-podcast-discussing-universal-cancer-vaccine-platform.php"></a>
                    <span>June 3, 2025 </span>
                    <h3>CancerVax Scientists Featured on Cytiva’s “Discovery Matters” Podcast Discussing Universal Cancer Vaccine Platform</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform that will use the body’s immune system to fight cancer, today announced that two of its lead scientists, Dr. George Katibah and Dr. Adam Grant, were recently featured on Cytiva’s influential podcast series, Discovery Matters. The episode highlights CancerVax’s revolutionary approach to immunotherapy and its mission to create a therapy that can universally target and destroy cancer cells</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="top-biotech-exec-joins-cancervax-as-chief-scientific-advisor.php"></a>
                    <span>February 27, 2025 </span>
                    <h3>Top Biotech Exec Joins CancerVax as Chief Scientific Advisor</h3>
                    <p>CancerVax, Inc., the developer of a revolutionary universal cancer treatment platform that will use the body’s immune system to treat cancer, announced today that Sumant Ramachandra, MD, PhD, MBA and founder of SR Global Health, LLC, a healthcare advisory firm, will serve as the Company’s new Chief Scientific Advisor</p>
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