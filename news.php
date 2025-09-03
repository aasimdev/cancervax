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
                    <a href="legendary-scientist-and-biotech-veteran-joins-cancervax-as-strategic-advisor.php"></a>
                    <span>September 3, 2025 </span>
                    <h3>Legendary Scientist and Biotech Veteran Joins CancerVax as Strategic Advisor</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that uses the body’s immune system to treat cancer, today announced that Gordon Ringold, PhD has joined the Company and will serve as Strategic Advisor</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-achieves-major-milestones-and-files-foundational-patent-application.php"></a>
                    <span>August 26, 2025 </span>
                    <h3>CancerVax Achieves Major Milestones and Files Foundational Patent Application</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that uses the body’s immune system to treat cancer, today announced that it recently filed a foundational PCT patent application to protect its novel innovations</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="scientists-discuss-the-recent-cancervax-breakthrough.php"></a>
                    <span>August 19, 2025 </span>
                    <h3>Scientists Discuss the Recent CancerVax Breakthrough</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform designed to use the body’s immune system to treat cancer, today announced the release of a video presentation featuring its scientific team discussing the recent breakthrough</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-successfully-disguises-cancer-cells-and-tricks-immune-cells-into-attacking-them.php"></a>
                    <span>August 5, 2025 </span>
                    <h3>CancerVax Successfully Disguises Cancer Cells and Tricks Immune Cells into Attacking Them</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform designed to use the body’s immune system to treat cancer, today announced that it has proven a major foundational hypothesis</p>
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