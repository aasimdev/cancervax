<?php
$GLOBALS['title'] = "CancerVax - Immunotherapy";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videosCEOPodcast = include "data/podcast-data.php";
$videos = include "data/carousel-videos.php";
include('header.php'); ?>

<style>
    .banner-main-bg {
        background: #fff url('./assets/img/home-banner.jpg?v=<?php echo filemtime('./assets/img/home-banner.jpg'); ?>') no-repeat center / cover;
    }

    @media (max-width: 767px) {
        .banner-main-bg {
            background: #fff url('./assets/img/home-banner-mobile.jpg?v=<?php echo filemtime('./assets/img/home-banner-mobile.jpg'); ?>') no-repeat center / cover;
        }
    }
</style>




<section class="banner-main">
    <div class="banner-main-bg banner-home-up">

        <div class="container">
            <div class="banner-main-content banner-heading text-center mx-auto">
                <h1 style="color: #295d6e">A Revolutionary Way
                    to Fight Cancer</h1>
            </div>
            <div class="banner-main-content">
                <p class="d-none d-md-block mt-0">The CancerVax Way
                </p>
                <ul class="d-none d-md-block">
                    <li>10 million people died last year because the body does not easily recognize and kill cancer cells.</li>
                    <li>However, the body is very good at killing diseases that it recognizes, such as measles.</li>
                    <li>Our unique technology disguises cancer cells to look like measles and “tricks” the body into killing them.</li>
                </ul>
            </div>
            <div class="banner-main-video">
                <h2 class="banner-video-head d-none d-xl-block">Short Explainer Video</h2>
                <div class="banner-video banner-video-top d-none d-xl-block">
                    <div class="banner-thumbnail">
                        <img src="./assets/img/home-video-thumbnail.jpg?v=<?php echo filemtime('./assets/img/home-video-thumbnail.jpg'); ?>" alt="thumbnail">
                    </div>
                    <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn text-uppercase popup-youtube">
                        <i class="far fa-play-circle"></i>
                        <span>Watch video</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Banner text -->
    <div class="mobile-banner-content d-md-none">
        <div class="container">
            <div class="banner-main-content">
                <p>The CancerVax Way
                </p>
                <ul>
                    <li>10 million people died last year because the body does not easily recognize and kill cancer cells.</li>
                    <li>However, the body is very good at killing diseases that it recognizes, such as measles.</li>
                    <li>Our unique technology disguises cancer cells to look like measles and “tricks” the body into killing them.</li>
                </ul>
            </div>
        </div>
    </div>

</section>


<section class="banner">
    <div class="banner__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="banner-video-head d-lg-none">Short Explainer Video</h2>
                    <div class="banner-video banner-video-top d-lg-none">
                        <div class="banner-thumbnail">
                            <img src="./assets/img/home-video-thumbnail.jpg?v=<?php echo filemtime('./assets/img/home-video-thumbnail.jpg'); ?>" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <h2 class="banner-video-head d-lg-none">Exciting Update on Our <br>
                    Revolutionary Cancer Treatment</h2>
                    <div class="banner-video banner-video-top d-lg-none">
                        <div class="banner-thumbnail">
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <div class="banner-text">
                        <p>

                            <strong> CancerVax is a pre-clinical biotech company</strong> developing a novel Universal Cancer Treatment Platform that will be customizable as an injection, to treat many types of cancer.
                        </p>

                        <p> Powered by artificial intelligence, our revolutionary approach <strong>DETECTS, MARKS, and KILLS</strong> only cancer cells using the body’s own immune system. Other immunotherapies have had very limited success trying to teach the immune system how to recognize cancer cells. Instead, we intend to make cancer cells look like a common disease that it already recognizes, such as measles, and “trick” the body into killing these “disguised” cancer cells with strength.</p>


                        <p> We look forward to the day when treating cancer will be as simple as getting a shot.
                        </p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <h2 class="banner-video-head d-none d-lg-block d-xl-none">Short Explainer Video</h2>
                    <div class="banner-video banner-video-top d-none d-lg-block d-xl-none">
                        <div class="banner-thumbnail">
                            <img src="./assets/img/home-video-thumbnail.jpg?v=<?php echo filemtime('./assets/img/home-video-thumbnail.jpg'); ?>" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <h2 class="banner-video-head d-none d-lg-block">Exciting Update on Our <br>
                    Revolutionary Cancer Treatment</h2>
                    <div class="banner-video banner-video-top d-none d-lg-block">
                        <div class="banner-thumbnail">
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>


                    <div class="banner-announcement">
                        <h4>Breaking News</h4>
                        <p>CancerVax Announces Successful Tests of its Smart mRNA Technology</p>
                        <a href="cancervax-announces-successful-tests-of-its-smart-mrna-technology.php" class="theme-btn">Learn More</a>
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

<section class="about-team-content">
    <div class="container">
        <h2>We have assembled a world-class team of
            experienced cancer scientists and advisors to help
            develop our revolutionary cancer technology.</h2>
    </div>
</section>

<?php include('section/team-heads.php'); ?>

<section class="worldhealth-n pt-0">
    <div class="container">
        <h2>Our Development Partners</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="dev-partners-img">
                    <img src="./assets/img/flashpoint.png" alt="Development Partners">
                </div>
            </div>
            <div class="col-lg-8">
                <p>Flashpoint was founded on nanotechnology developed over the past 10 years in the laboratory of Chad Mirkin, Director of the International Institute for Nanotechnology at Northwestern University and 2024 winner of the prestigious Kavli Prize in Nanoscience. <strong>Flashpoint’s groundbreaking nanotechnology discovery platform</strong> enables the development of therapeutic candidates with superior product profiles. Validated in numerous in-vivo models, this technology has transformed components that are ineffective in conventional formulations into curative cancer immunotherapies. CancerVax is working with Flashpoint to deliver its novel Universal Cancer Treatment therapies using Flashpoint’s nanoparticle technology.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="dev-partners-img">
                    <img src="./assets/img/cytiva.png" alt="Development Partners">
                </div>
            </div>
            <div class="col-lg-8">
                <p>Cytiva, formerly Precision NanoSystems, is a part of Danaher (NYSE: DHR) and a global leader in advancing and accelerating therapeutics. With a strong presence in life sciences research and bioprocessing, Cytiva provides innovative technologies and expertise to help companies bring life-changing treatments to market. The company specializes in biomanufacturing solutions, lipid nanoparticle (LNP) development, and cutting-edge analytical tools. CancerVax is working with Cytiva to leverage its clinically proven LNPs to to create a complete CancerVax therapeutic nanoparticle.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="dev-partners-img">
                    <img src="./assets/img/axisbio.png" alt="Development Partners">
                </div>
            </div>
            <div class="col-lg-8">
                <p>Axis Bio is a preclinical contract research organisation with specialist capabilities in oncology, inflammation and respiratory diseases. Services range from in vitro efficacy and mechanistic studies, to in vivo target engagement, with each study tailored to the unique requirements of the client. Our clients are spread across the globe and include pharmaceutical and biotech businesses, university-based research organisations and virtual/semi-virtual development companies. We listen, guide and advise clients through every step of the preclinical efficacy testing process, to deliver clear and robust results in a timely and cost-effective manner. This approach applies whether we are simply carrying out the in-life phase of a study or providing a complete package of analysis including flow cytometry analysis, bioanalysis and blood analysis, along with a detailed interpretation of results and recommendations.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="dev-partners-img">
                    <img src="./assets/img/trilink.png" alt="Development Partners">
                </div>
            </div>
            <div class="col-lg-8">
                <p>TriLink BioTechnologies, a Maravai LifeSciences company, is a global leader in nucleic acid and mRNA solutions. TriLink delivers unrivaled chemical and biological experience, CDMO services, and high-quality readymade and custom materials, including its patented CleanCap® mRNA capping technology. Pharmaceutical leaders, biotech disruptors, and world governments depend on TriLink to meet their greatest challenges, from delivering the COVID-19 vaccine at warp speed to empowering innovative treatments in oncology, infectious diseases, cardiology, and neurological disorders to enabling future pandemic response plans.
                </p>
            </div>
        </div>
    </div>
</section>


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
                        <p>According to Precedence Research, the global biotechnology market is projected to grow from $1.3 trillion in 2023 to <span>$3.2 trillion by 2030</span>.
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


<!-- <div class="divider-section"></div>


<section class="redefining">
    <div class="container">
        <div class="redefining-text">
            <span>CancerVax</span>
            <h2> redefining <br> immunotherapy</h2>
        </div>
    </div>
</section>


<section class="pclinical">
    <div class="container">
        <div class="pclinical-wrap">
            <h3>
                <span>Pre-clinical.</span> We’re developing cutting edge immunotherapy cancer treatments that use
                the body’s
                immune system to fight cancer.
            </h3>
        </div>
    </div>
</section> -->


<section class="nCommentary " id="short-videos">
    <div class="container">
        <h2 class="banner-video-head">One Minute Explainer Videos </h2>
        <div class="row justify-content-center g-sm-5">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=SLj-WU08GJQ"></a>

                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Weapon Against Cancer</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=RSgh0qaEUO4"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Making Cancer Look Like Measles</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=kOxGWgLwuDs"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Immune System Memory</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=8ESunhDXzU4"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Let's Talk <br /> About Cancer</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=hmvMkgdIP7E"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Realities of Chemo and Radiation</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=W6fbVgrutxI"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Groundbreaking Treatment</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=SLj-WU08GJQ"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Weapon Against Cancer</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=RSgh0qaEUO4"></a>
                        <div class="short-thumbnail">
                            <img src="./assets/img/short-thumbnail.png" alt="thumbnail">
                            <div class="short-thumbnail-onview">
                                <h5>CancerVax - Making Cancer Look Like Measles</h5>
                                <img src="./assets/img/play-button.png" alt="play-button">
                                <p>Play Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





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


<section class="newshighlight">
    <div class="container">
        <h4>News Highlights</h4>
        <div class="row">
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
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-taps-flashpoint-therapeutics-nanotechnology-platform-to-drive-universal-cancer-treatment.php"></a>
                    <span> August 29, 2024</span>
                    <h3>Cancervax Taps Flashpoint Therapeutics’ Nanotechnology Platform to Drive Universal Cancer Treatment </h3>
                    <p> Cancervax, Inc., the developer of a breakthrough universal cancer treatment platform that will use the body’s immune system to fight cancer, today announced that the Company has entered into a research agreement with Flashpoint Therapeutics to perform research on its newly patent-pending Universal Cancer Treatment platform. </p>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="newsletter home-newsletter">
    <div class="container">
        <div class="newsletter-wrap">
            <h2>SUBSCRIBE</h2>
            <p>Keep up with our progress by subscribing to our email newsletter!</p>
            <form action="https://submit.jotform.com/submit/242775392698071/" method="POST">
                <input type="hidden" name="formID" value="242775392698071" />
                <input type="email" id="input_3" name="q3_email" class="form-control" placeholder="Your email address...">
                <div class="form-line control-formnew mt-2 jf-required" data-type="control_captcha" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="input_4" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>
                    <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                        <section data-wrapper-react="true">
                            <div id="hcaptcha_input_4" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="onCaptchaSuccess" data-expired-callback="onCaptchaExpired"></div><input type="hidden" id="input_4" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                            <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                        </section>
                    </div>
                </div>
                <button type="submit" id="submitNewsletterButton" disabled>Subscribe</button>
            </form>
            <script>
                const submitNewsletterButton = document.getElementById('submitNewsletterButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_4').value = token;
                    submitNewsletterButton.disabled = false;
                }

                function onCaptchaExpired() {
                    document.getElementById('input_4').value = '';
                    submitNewsletterButton.disabled = true;
                }
            </script>
        </div>
    </div>
</section>

<?php
include('footer.php'); ?>