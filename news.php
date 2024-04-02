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
                    <a href="cancervax-ceo-ryan-davies-discusses-cancer-drug-development-with-dr-ezra-cohen.php"></a>
                    <span>November 2, 2023 </span>
                    <h3>CancerVAX CEO Ryan Davies Discusses Cancer Drug Development with Dr. Ezra Cohen</h3>
                    <p> CancerVAX, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, and Tempus Labs Chief Medical Officer for Oncology Dr. Ezra Cohen, discussed his time at Tempus Labs, Moores Cancer Center and University of Chicago</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="ucart-announcement.php"></a>
                    <span>September 12, 2023 </span>
                    <h3>CancerVAX Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                    <p> CancerVAX, Inc., a pre-clinical biotechnology company working with UCLA to develop breakthrough immunotherapy cancer treatments that use the body’s immune system to fight cancer, today announced an expansion of its development pipeline to include a Universal CAR-T Cell Platform that can dramatically lower the cost of CAR-T cell cancer therapies</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discussed-cancer-immunotherapy-with-ucla-physician-scientist.php"></a>
                    <span>August 24, 2023 </span>
                    <h3>CancerVAX CEO Ryan Davies Discussed Cancer Immunotherapy with UCLA Physician-Scientist</h3>
                    <p>CancerVAX, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, spoke with and UCLA cancer physician and researcher, Dr. Steven Jonas, about his journey to becoming both a practicing cancer doctor and active cancer researcher</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="world-renowned-biomedical-professor-jonathan-lakey-joins-cancervax-board-of-advisors.php"></a>
                    <span>July 25, 2023 </span>
                    <h3>World Renowned Biomedical Professor Jonathan Lakey Joins CancerVAX Board of Advisors</h3>
                    <p>Dr. Lakey has been recognized nationally and internationally for his groundbreaking research in cell and tissue transplantation for patients suffering from diabetes and cancer</p>
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
                    <h3>CancerVAX Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancervax-reports-significant-progress-on-universal-cancer-vaccine-development-at-ucla.php"></a>
                    <span>June 27, 2023</span>
                    <h3>CancerVAX Reports Significant Progress on Universal Cancer Vaccine Development at UCLA</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancerax-reports-positive-progress-on-kids-cancer-immunotherapy-treatment.php"></a>
                    <span>June 12, 2023</span>
                    <h3>CancerVAX Reports Positive Progress on Kids Cancer Immunotherapy Treatment </h3>
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
        <h4>CancerVAX In The News</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://ceoblognation.com/2023/11/22-entrepreneurs-explain-what-being-a-ceo-means-to-them/" target="_blank"></a>
                    <img src="./assets/img/news-logo-5.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:20px;">November 12, 2023</span>
                    <h3>22 Entrepreneurs Explain What Being a CEO Means to Them</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://valiantceo.com/ryan-davies-cancervax/" target="_blank"></a>
                    <img src="./assets/img/news-logo-7.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:20px;">October 12, 2023</span>
                    <h3>Ryan Davies Shares Insights on CancerVAX and the Future of Cancer Treatment</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pharmacytimes.com/view/challenges-and-opportunities-in-the-treatment-of-ewing-sarcoma" target="_blank"></a>
                    <img src="./assets/img//pharmacy.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:20px;">October 5, 2023</span>
                    <h3>Challenges and Opportunities in the Treatment of Ewing Sarcoma</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pacbiztimes.com/2023/10/06/santa-barbara-firm-partners-with-ucla-for-new-cancer-treatments/" target="_blank"></a>
                    <img src="./assets/img/pacific.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:30px;">OCTOBER 6, 2023</span>
                    <h3>Santa Barbara firm partners with UCLA for new cancer treatments</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://rescue.ceoblognation.com/2023/09/13/18-entrepreneurs-share-some-of-the-best-leadership-ceo-hacks-and-resources/" target="_blank"></a>
                    <img src="./assets/img/news-logo-5.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">September 26, 2023</span>
                    <h3>18 Entrepreneurs Share Some of The Best Leadership CEO Hacks and Resources</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/health-tech/cancer-vaccines-where-are-we-now-and-where-are-we-going/" target="_blank"></a>
                    <img src="./assets/img/news-logo-6.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:15px;">September 23, 2023</span>
                    <h3>Cancer Vaccines: Where are We Now and Where are We Going?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/profiles/ryan-davies/" target="_blank"></a>
                    <img src="./assets/img/news-logo-4.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">August 14, 2023</span>
                    <h3>Serial Entrepreneur Using Science to Tackle the Biggest Disease with Founder Ryan Davies | Ep 693</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.labiotech.eu/in-depth/sarcoma-research-advances/" target="_blank"></a>
                    <img src="./assets/img/news-logo-3.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:25px;">July 24, 2023</span>
                    <h3>Labiotech: Sarcoma Research: Is a Breakthrough in Sight?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>
                    <img src="./assets/img/news-logo-2.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">July 14, 2023</span>
                    <h3>Healthcare Business Today: Scientists Have Found The Silver Bullet for Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>
                    <img src="./assets/img/news-logo-1.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:25px;">June 22, 2023</span>
                    <h3>HealthLeaders: CancerVax CEO Sees a Homerun With Breakthrough Cancer Vaccine</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>
                    <img src="./assets/img/news-logo-2.png" alt="news" class="news-logo-n " style="heiht:50px;">
                    <span style="margin-top:8px;">July 14, 2023</span>
                    <h3>Scientists Have Found The Silver Bullet For Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>
                    <img src="./assets/img/news-logo-1.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:23px;">JUNE 22, 2023</span>
                    <h3>CancerVax CEO Sees a Home Run With Breakthrough Universal Cancer Vaccine</h3>
                </div>
            </div>

        </div>
    </div>
</section>









<?php
include('footer.php'); ?>