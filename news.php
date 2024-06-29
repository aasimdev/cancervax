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
                    <a href="cancervax-successfully-uses-nobel-prize-chemistry-to-achieve-universal-cancer-vaccine-targeting-milestone.php"></a>
                    <span> May 21, 2024</span>
                    <h3>CancerVax Successfully Uses Nobel Prize Chemistry to Achieve Universal Cancer Treatment Targeting Milestone   </h3>
                    <p> CancerVax, Inc., the developer of breakthrough cancer drugs that will use the body’s immune system to fight cancer, today announced that its UCLA research team has achieved a critical milestone by creating a process to add any antibody to lipid nanoparticles (LNP) using “click chemistry”, for targeting cancer cells </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-announces-promising-new-drug-to-treat-a-deadly-children-cancer.php"></a>
                    <span> April 16, 2024 </span>
                    <h3>CancerVax Announces Promising New Drug to Treat a Deadly Children’s Cancer </h3>
                    <p> CancerVax, Inc., the developer of breakthrough cancer drugs that will use the body’s immune system to fight cancer, today announced that its UCLA research team has created a promising new drug candidate for treating recurrent Ewing sarcoma, a deadly children’s cancer </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-launches-5-million-funding-round.php"></a>
                    <span> April 3, 2024 </span>
                    <h3>CancerVax Launches $5 Million Funding Round </h3>
                    <p> CancerVax, Inc., developer of a breakthrough Universal Cancer Treatment treatment that will use the body’s immune system to fight cancer, today announced that its Reg A+ offering has been qualified by the SEC allowing the Company to formally launch a funding round of up to $5 million. Proceeds from the SEC qualified Reg A+ offering will be used by the Company to continue work on its breakthrough cancer treatments </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discusses-cancer-drug-development-with-dr-ezra-cohen.php"></a>
                    <span>November 2, 2023 </span>
                    <h3>CancerVax CEO Ryan Davies Discusses Cancer Drug Development with Dr. Ezra Cohen</h3>
                    <p> CancerVax, Inc., developer of a breakthrough universal cancer treatment that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, and Tempus Labs Chief Medical Officer for Oncology Dr. Ezra Cohen, discussed his time at Tempus Labs, Moores Cancer Center and University of Chicago</p>
                </div>
            </div>



        </div>
        <div class="news-see-archive">
            <a href="/news-archive">See All</a>
        </div>

        <div class="offerInvest">
            <a href="https://cancervax.directinvest.io/purchase/65664bc380017111b27593bf/">Invest Here <span>Secure Direct Invest Platform</span></a>
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
                    <h3>Ryan Davies Shares Insights on CancerVax and the Future of Cancer Treatment</h3>
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
                    <h3>CancerVax CEO Sees a Home Run With Breakthrough Universal Cancer Treatment</h3>
                </div>
            </div>

        </div>
    </div>
</section>









<?php
include('footer.php'); ?>