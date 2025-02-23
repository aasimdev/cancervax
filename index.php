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

<section class="coming-soon">
    <div class="container">
        <div class="coming-soon-title">Upcoming Webinar </div>
        <div class="coming-soon-content">Exciting Update on Our
            <br class="d-none d-md-inline-block" /> Revolutionary Cancer Treatment <br> Tuesday, February 25, 2025 <br> 1:00 pm PST / 4:00 pm EST
        </div>
        <p>Sign up now to reserve your spot
        </p>
        <form action="https://submit.jotform.com/submit/250306574577058/" method="POST" autocomplete="off">
            <input type="hidden" name="formID" value="250306574577058">
            <input type="email" id="webinar-email" name="q3_webinaremail" placeholder="Enter email address" required>

            <button type="submit">Sign up!</button>
        </form>
    </div>
</section>


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
                    <h2 class="banner-video-head d-lg-none">Interview with Our Principal Scientist</h2>
                    <div class="banner-video banner-video-top d-lg-none">
                        <div class="banner-thumbnail">
                            <img src="//img.youtube.com/vi/asKKFnY-LFk/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=asKKFnY-LFk" class="theme-btn text-uppercase popup-youtube">
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
                    <h2 class="banner-video-head d-none d-lg-block">Interview with Our Principal Scientist</h2>
                    <div class="banner-video banner-video-top d-none d-lg-block">
                        <div class="banner-thumbnail">
                            <img src="//img.youtube.com/vi/asKKFnY-LFk/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=asKKFnY-LFk" class="theme-btn text-uppercase popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>


                    <div class="banner-announcement">
                        <h4>Breaking News</h4>
                        <p>CancerVax Passes First Test <br> with Flying Colors</p>
                        <a href="cancervax-passes-first-test-with-flying-colors.php" class="theme-btn">Learn More</a>
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

<section class="coreTeam">
    <div class="container">
        <div class="coreTeam-head">
            <h3>Our Scientific Team</h3>
        </div>

        <div class="team-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/george.png" class="object-fit-cover unsized-team" style="object-position: 100% 0;" alt="john">
                            </a>
                        </div>
                        <h5>
                            George Katibah, <span>PhD</span>
                        </h5>
                        <p>
                            Chief Scientific Officer
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>Expert in the discovery, development, and translation of novel therapies across diverse therapeutic modalities</li>
                                <li>Deep background in immunology and the tumor microenvironment</li>
                                <li>Broad therapeutic domain expertise, including oncology, immunology, personalized medicine, and infectious diseases</li>
                                <li>Part of teams that developed the first-in-human drug candidates, including small molecule STING agonists and personalized cancer neoantigen vaccine</li>
                                <li>Co-authored more than 16 scientific papers and inventor on 3 issued U.S. patents and multiple pending applications</li>
                                <li>Formerly Director of Discovery Biology at RAPT Therapeutics</li>
                                <li>Formerly Senior Scientist and Head of Biochemistry at Aduro Biotech</li>
                                <li>Received his B.S. in Plant Sciences from the University of California, Santa Cruz</li>
                                <li>Received his PhD in Molecular and Cell Biology from the University of California, Berkeley</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/adam-grant.png" class="object-fit-cover" style="object-position: 100% 0;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Adam Grant, <span>PhD</span>
                        </h5>
                        <p>
                            Principal Scientist
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>An inventor of the Company’s Universal Cancer Treatment platform</li>
                                <li>Expert computational biologist using next generation sequencing data to identify new drug targets and biomarkers of response to cancer therapeutics </li>
                                <li>Formerly Bioinformatician at Xenter Medical Technologies</li>
                                <li>Formerly Computational Scientist at RAPT Therapeutics</li>
                                <li>Invented software to improve cancer antigen detection</li>
                                <li>Invented a gene-signature approach to select treatment for breast cancer</li>
                                <li>Received his B.S in Bioinformatics from Brigham Young University</li>
                                <li>Received his PhD in Cancer Biology with an emphasis in Bioinformatics from the University of Arizona</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/sumant-ramachandra.png" class="object-fit-cover" style="object-position: 100% 0;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Sumant Ramachandra, <span>MD, PhD, MBA</span>

                        </h5>
                        <p>
                            Chief Scientific Advisor
                        </p>


                        <div class="team-description">
                            <div class="popup-aftertitle">
                                <h5>Founder: SR Global Health, LLC</h5>
                            </div>
                            <p class="py-2">Sumant Ramachandra serves as an Independent Director on the Board of Lyell Immunopharma (“Lyell”), following Lyell’s acquisition of ImmPACT Bio (“ImmPACT”) in October 2024. As CEO of ImmPACT from November 2021 until its acquisition, he led capital raises, secured clinical grants, and built a team that achieved FDA clearance for three Investigational New Drug (IND) applications, established manufacturing capabilities, and advanced multiple clinical studies. </p>
                            <p class="py-2">In addition, Dr. Ramachandra currently serves as an advisor to private equity funds on companies in the pharmaceuticals, biotechnology, and medical devices/software spaces. <br> Previously, Dr. Ramachandra served as Chief Science, Technology, and Medical Officer at Baxter International, starting in June 2017. He was also appointed President of Baxter Pharmaceuticals in 2019. Prior to Baxter, he held the role of Senior Vice President, Head of Research & Development, at Pfizer Essential Health, and served as Chief Scientific Officer at Hospira from 2008 until Pfizer acquired Hospira in 2015. Earlier in his career, Dr. Ramachandra held senior roles at Pfizer and Merck & Co., specializing in oncology, global product development, medical affairs, business development, and clinical pharmacology. He began his medical career as an intern and resident physician at Massachusetts General Hospital, Harvard Medical School.</p>
                            <p class="py-2">Dr. Ramachandra earned his undergraduate degree in biochemistry, a PhD in experimental pathology (with a focus on chronic lymphocytic leukemia), and an MD from Rutgers University. He also holds an MBA from the Wharton School, University of Pennsylvania.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-wrapper">
            <div class="row my-4 justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/amit-indap.png" class="object-fit-cover" style="object-position: 100% 0;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Amit Indap, <span>PhD</span>
                        </h5>
                        <p>
                            Scientific Advisor
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>
                                    Expert in immuno-oncology involving mRNA vaccine development for cancer and COVID, CDx development using comprehensive genomic profiling of tumors, ctDNA analysis of clinical samples, NGS based antibody discovery, and single cell RNAseq analysis</li>
                                <li>Formerly Principal Scientist at Pfizer</li>
                                <li>Formerly Scientist at Good Start Genetics</li>
                                <li>Formerly Research Scientist at Human Longevity, Inc.</li>
                                <li>Formerly Bioinformatics Scientist at Illumina</li>
                                <li>Formerly Senior Manager of Bioinformatics at Xencor</li>
                                <li>Received his B.S. in Molecular and Cellular Biology and minor in Computer Science From University of Arizona</li>
                                <li>Received his M.S. degree in bioinformatics from Medical College of Wisconsin</li>
                                <li>Received his PhD in Biology from Boston College</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/lakey.png" class="object-fit-cover" style="    object-position: bottom;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Jonathan Lakey, <span>PhD</span>
                        </h5>
                        <p>
                            Scientific Advisor
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>An inventor of the famous “Edmonton Protocol” for treating Type 1 diabetes</li>
                                <li>Extensive experience in the fields of oncology, stem cells, and organ transplantation</li>
                                <li>Currently Professor Emeritus at University of California, Irvine.</li>
                                <li>Formerly Postdoctoral Fellow, Cryobiology Research Institute Indiana University Indianapolis
                                </li>
                                <li> Formerly Postdoctoral Fellow, Clinical tissue banking University of Washington</li>
                                <li>Formerly Postdoctoral Fellow, Tissue banking/cryopreservation University of Alberta</li>
                                <li>Published over 495 scientific papers, 45 books, and over 500 scientific abstracts</li>
                                <li>Advisor to many biotech companies</li>
                                <li>Received his BS in Zoology/Animal Biology from University of Alberta</li>
                                <li>Received his MS in Zoology/Animal Biology from University of Alberta</li>
                                <li>Received his PhD of Islet transplantation, diabetes, and medical devices from University of Alberta</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4 justify-content-center">

                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/matthew-spear.png" class="object-fit-cover" style="    object-position: bottom;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Matthew Spear, <span>MD</span>
                        </h5>
                        <p>
                            Scientific Advisor
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>Expert in guiding the development and commercialization of new drugs, therapies, and biotech products as Chief Development Officer and Chief Medical Officer of biotech companies</li>
                                <li>Dr. Spear has been working in oncology and gene therapy research and development for over 30 years</li>
                                <li>Currently Chief Development Officer / Chief Medical Officer at Denovo Biopharma</li>
                                <li>Formerly Associate Professor on the faculty of the USC Keck School of Medicine, and the UCSD Medical School / UCSD Cancer Center where he managed a clinical practice, drug discovery/gene therapy research, and clinical trial programs for cancer.</li>
                                <li>Formerly led multiple oncology clinical development programs at Pfizer</li>
                                <li>Formerly served as Chief Medical Officer and Senior Vice-President at Nereus Pharmaceuticals</li>
                                <li>Formerly Head of Oncology and Head of Biotherapeutics at Sunovion Pharmaceuticals</li>
                                <li>Formerly Vice-President at Incyte and Sangamo Therapeutics</li>
                                <li>Formerly Chief Medical Officer at Poseida Therapeutics developing multiple CAR-T cell and gene therapy products</li>
                                <li>Received a B.A. degree from the Johns Hopkins University</li>
                                <li>Received his M.D. degree from Stanford University</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <a href="#">
                                <img src="./assets/img/steven-warner.png" class="object-fit-cover" style="    object-position: bottom;" alt="john">
                            </a>
                        </div>
                        <h5>
                            Steven Warner, <span>PhD</span>
                        </h5>
                        <p>
                            Scientific Advisor
                        </p>
                        <div class="team-description">
                            <ul class="theme-list pb-4 px-4">
                                <li>Specializes in small molecule drug discovery, new screening platforms in drug discovery, and translational research focusing on cancer therapeutics</li>
                                <li>He is an expert in the discovery of novel cancer agents and has played integral roles in moving multiple compounds into clinical trials.</li>
                                <li>Currently Senior VP and Head of US Research at Sumitomo Pharma America</li>
                                <li>Formerly Manager of Discovery Biology at SuperGen</li>
                                <li>Formerly Senior Manager of Drug Discovery at Huntsman Cancer Institute</li>
                                <li>Formerly VP of Drug Discovery at Tolero Pharmaceuticals</li>
                                <li>Received his B.S. in Biology from Brigham Young University</li>
                                <li>Received his PhD in Pharmaceutical Sciences from the University of Arizona</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <a href="cancervax-passes-first-test-with-flying-colors.php"></a>
                    <span>December 20, 2024 </span>
                    <h3>CancerVax Passes First Test with Flying Colors</h3>
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