<?php
$GLOBALS['title'] = "CancerVax - Immunotherapy";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videosCEOPodcast = include "data/podcast-data.php";
$videos = include "data/carousel-videos.php";
include('header.php'); ?>


<section class="banner-main">
    <div class="banner-main-bg">
        <div class="container">
            <div class="banner-main-content">
                <h1>Creating a Better Way
                    to Treat Cancer</h1>
                <p>A Universal <br class="d-sm-none"> Cancer Treatment Platform</p>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="banner__content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-text">
                        <div class="banner-announcement d-lg-none">
                            <h4>Breaking News</h4>
                            <p>CancerVax Files New Patent for Its Novel
                                Universal Cancer Treatment Platform</p>
                            <a href="cancervax-files-new-patent-for-its-novel-universal-cancer-treatment-platform.php" class="theme-btn">Learn More</a>
                        </div>
                        <p><strong>CancerVax is a pre-clinical biotech company</strong> developing a novel Universal Cancer Treatment Platform that will be customizable, as an injection, to treat many types of cancer. </p>

                        <p> Our innovative approach <strong>DETECTS, MARKS, and KILLS</strong> only cancer cells. By making cancer cells “look” like well immunized common diseases such as COVID-19, measles, tetanus, or chickenpox, we intend to use the body’s natural immune system to easily kill cancer cells.</p>

                        <p> We have also created our first cancer drug candidate – a single-disease specific immunotherapy targeting Ewing sarcoma, a rare but deadly bone and soft tissue cancer primarily affecting children and young adults. </p>
                        <p> We look forward to the day when treating cancer will be as simple as getting a shot – a better way to treat cancer.</p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-announcement d-none d-lg-block">
                        <h4>Breaking News</h4>
                        <p>CancerVax Files New Patent for Its Novel
                            Universal Cancer Treatment Platform</p>
                        <a href="cancervax-files-new-patent-for-its-novel-universal-cancer-treatment-platform.php" class="theme-btn">Learn More</a>
                    </div>
                    <div class="banner-video">
                        <div class="banner-thumbnail">
                            <img src="https://i.ytimg.com/vi/2OHGmKOqOYE/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=2OHGmKOqOYE" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="ctreament mt-5">
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

<section class="worldhealth-n">
    <div class="container">
        <h2>Development Partners</h2>
        <p>With more than <strong>500 physicians and scientists working on the forefront of cancer discoveries</strong>, the UCLA Health Jonsson Comprehensive Cancer Center is a leader in providing both experimental and traditional cancer treatments. Working with a team of world class cancer researchers and practicing oncologists at UCLA, CancerVax began the initial development of its novel Universal Cancer Treatment platform. Also working with CancerVax, UCLA developed a promising cancer drug candidate – a single-disease specific immunotherapy targeting Ewing sarcoma, a rare but deadly bone and soft tissue cancer primarily affecting children and young adults. </p>
        <p>Flashpoint was founded on nanotechnology developed over the past 10 years in the laboratory of Chad Mirkin, Director of the International Institute for Nanotechnology at Northwestern University and 2024 winner of the prestigious Kavli Prize in Nanoscience. <strong>Flashpoint’s groundbreaking nanotechnology discovery platform</strong> enables the development of therapeutic candidates with superior product profiles. Validated in numerous in-vivo models, this technology has transformed components that are ineffective in conventional formulations into curative cancer immunotherapies. CancerVax is working with Flashpoint to deliver its novel Universal Cancer Treatment therapies using Flashpoint’s nanoparticle technology.</p>
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
                    <p> CancerVax, Inc., developer of a breakthrough Universal Cancer Treatment that will use the body’s immune system to fight cancer, today announced that its Reg A+ offering has been qualified by the SEC allowing the Company to formally launch a funding round of up to $5 million. Proceeds from the SEC qualified Reg A+ offering will be used by the Company to continue work on its breakthrough cancer treatments </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discusses-cancer-drug-development-with-dr-ezra-cohen.php"></a>
                    <span>November 2, 2023 </span>
                    <h3>CancerVax CEO Ryan Davies Discusses Cancer Drug Development with Dr. Ezra Cohen</h3>
                    <p> CancerVax, Inc., developer of a breakthrough universal cancer treatment that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, and Tempus Labs Chief Medical Officer for Oncology Dr. Ezra Cohen, discussed his time at Tempus Labs, Moores Cancer Center and University of Chicago </p>
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
                    <p>CancerVax, Inc., developer of a breakthrough universal cancer treatment that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, spoke with and UCLA cancer physician and researcher, Dr. Steven Jonas, about his journey to becoming both a practicing cancer doctor and active cancer researcher</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php
include('footer.php'); ?>