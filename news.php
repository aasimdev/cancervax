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
                    <p>CancerVax, Inc., the developer of a revolutionary universal cancer treatment platform that will use the body’s immune system to fight cancer, announced today that Sumant Ramachandra, MD, PhD, MBA and founder of SR Global Health, LLC, a healthcare advisory firm, will serve as the Company’s new Chief Scientific Advisor</p>
                </div>
            </div>
        <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-announces-successful-tests-of-its-smart-mrna-technology.php"></a>
                    <span>February 25, 2025</span>
                    <h3>CancerVax Announces Successful Tests of its Smart mRNA Technology</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform that will use the body’s immune system to fight cancer, today announced the successful functional validation of its innovative Smart mRNA (messenger RNA) technology in lab tests</p>
                </div>
            </div>
       
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-targets-hard-to-treat-pancreatic-cancer.php"></a>
                    <span>December 11, 2024 </span>
                    <h3>CancerVax Targets Hard to Treat Pancreatic Cancer</h3>
                    <p>CancerVax, Inc., the developer of a breakthrough universal cancer treatment (UCT) platform that will use the body’s immune system to fight cancer, announced today that the Company has selected Pancreatic Ductal Adenocarcinoma (PDAC) as one of its first targets for preclinical development</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="dr-george-katibah-to-serve-as-the-company-chief-scientific-officer.php"></a>
                    <span> November 19, 2024 </span>
                    <h3>Dr. George Katibah to serve as the Company’s Chief Scientific Officer</h3>
                    <p> CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that will use the body’s immune system to fight cancer, announced today that Dr. George Katibah will serve as the company’s Chief Scientific Officer</p>
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
<section class="news pb-0">
    <div class="container">
        <h4>CancerVax In The News</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://ceoblognation.com/2023/11/22-entrepreneurs-explain-what-being-a-ceo-means-to-them/" target="_blank"></a>
                    <span style="margin-top:20px;">November 12, 2023</span>
                    <h3>22 Entrepreneurs Explain What Being a CEO Means to Them</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://valiantceo.com/ryan-davies-cancervax/" target="_blank"></a>
                    <span style="margin-top:20px;">October 12, 2023</span>
                    <h3>Ryan Davies Shares Insights on CancerVax and the Future of Cancer Treatment</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pharmacytimes.com/view/challenges-and-opportunities-in-the-treatment-of-ewing-sarcoma" target="_blank"></a>

                    <span style="margin-top:20px;">October 5, 2023</span>
                    <h3>Challenges and Opportunities in the Treatment of Ewing Sarcoma</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pacbiztimes.com/2023/10/06/santa-barbara-firm-partners-with-ucla-for-new-cancer-treatments/" target="_blank"></a>

                    <span style="margin-top:30px;">OCTOBER 6, 2023</span>
                    <h3>Santa Barbara firm partners with UCLA for new cancer treatments</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://rescue.ceoblognation.com/2023/09/13/18-entrepreneurs-share-some-of-the-best-leadership-ceo-hacks-and-resources/" target="_blank"></a>

                    <span style="margin-top:13px;">September 26, 2023</span>
                    <h3>18 Entrepreneurs Share Some of The Best Leadership CEO Hacks and Resources</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/health-tech/cancer-vaccines-where-are-we-now-and-where-are-we-going/" target="_blank"></a>

                    <span style="margin-top:15px;">September 23, 2023</span>
                    <h3>Cancer Vaccines: Where are We Now and Where are We Going?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/profiles/ryan-davies/" target="_blank"></a>

                    <span style="margin-top:13px;">August 14, 2023</span>
                    <h3>Serial Entrepreneur Using Science to Tackle the Biggest Disease with Founder Ryan Davies | Ep 693</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.labiotech.eu/in-depth/sarcoma-research-advances/" target="_blank"></a>

                    <span style="margin-top:25px;">July 24, 2023</span>
                    <h3>Labiotech: Sarcoma Research: Is a Breakthrough in Sight?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>

                    <span style="margin-top:13px;">July 14, 2023</span>
                    <h3>Healthcare Business Today: Scientists Have Found The Silver Bullet for Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>

                    <span style="margin-top:25px;">June 22, 2023</span>
                    <h3>HealthLeaders: CancerVax CEO Sees a Homerun With Breakthrough Cancer Vaccine</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>

                    <span style="margin-top:8px;">July 14, 2023</span>
                    <h3>Scientists Have Found The Silver Bullet For Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>

                    <span style="margin-top:23px;">JUNE 22, 2023</span>
                    <h3>CancerVax CEO Sees a Home Run With Breakthrough Universal Cancer Treatment</h3>
                </div>
            </div>

        </div>
    </div>
</section>









<?php
include('footer.php'); ?>