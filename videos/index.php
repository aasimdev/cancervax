<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "../data/podcast-data.php";
include('../header.php'); ?>

<section class="cchatsbanner">
    <div class="container">
        <h1>Videos</h1>
    </div>
</section>

<div class="videoCategories">
    <div class="container">
        <div class="trend-video">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="video-section">
                        <h3 class="banner-video-head">Short Explainer Video</h3>
                        <div class="banner-video-top m-0 position-relative">
                            <a href="https://vimeo.com/1074002405" class="popup-vimeo">
                                <img src="https://i.ytimg.com/vi/PXBNJe3nHp0/maxresdefault.jpg" alt="hero" class="img-fluid">
                                <i class="far fa-play-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="vCatBox">
                    <a href="#news-commentary">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/news-commentary.png" alt="video">
                        </div>
                        <span>News Commentary</span>
                    </a>
                </div>
            </div>
            <!--            <div class="col-lg-4 col-md-6">
                <div class="vCatBox">
                    <a href="#podcast">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/ceo-podcast.png" alt="video">
                        </div>
                        <span>Podcast</span>
                    </a>
                </div>
            </div>-->

            <div class="col-lg-4 col-md-6">
                <div class="vCatBox">
                    <a href="#short-videos">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/short-videos.png" alt="video">
                        </div>
                        <span>Short
                            Videos
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="vCatBox">
                    <a href="#webinars">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/webinars.png" alt="video">
                        </div>
                        <span>Webinars
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="nCommentary" id="webinars">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>Webinars</h3>
        </div>
        <div class="row">
    
            <div class="col-xl-6 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a href="/webinar-feb-25-2025"></a>
                        <div class="cchat-thumbnail thumbnail-overlay h-auto">
                            <img src="https://vumbnail.com/1074009289.png" alt="Thumbnail">
                        </div>
                        <i class="far fa-play-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a href="/webinar-may-31-2025"></a>
                        <div class="cchat-thumbnail thumbnail-overlay h-auto">
                            <img src="https://vumbnail.com/1088764643/6170b7e696.png" alt="Thumbnail">
                        </div>
                        <i class="far fa-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="nCommentary" id="news-commentary">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>News Commentary</h3>
            <a href="./news-commentary">See All</a>
        </div>
        <div class="row">
            <?php
            $categories = ['news-commentary'];

            $filteredNewsCommentaryVideos = array_filter($videos, function ($item) use ($categories) {
                // Check if the category is in the list and the scope is public, but not "short-videos"
                return in_array($item['category'], $categories) && $item['scope'] === 'public' && $item['category'] !== 'short-videos';
            });

            // Sort the filtered videos by date in descending order
            // usort($filteredNewsCommentaryVideos, function ($a, $b) {
            //     return strtotime($b['date']) - strtotime($a['date']);
            // });

            // Take the latest 4 videos for "news-commentary"
            $latestNewsCommentary = array_slice($filteredNewsCommentaryVideos, 0, 4);

            foreach ($latestNewsCommentary as $video) {
                if ($video['date']) {
                    $title = $video['date'] . " - " . $video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"cchat\">
            <div class=\"cchat-box mb-4\">
            <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
            <a href=\"news-commentary/{$video['slug']}\"></a>
                <div class=\"cchat-thumbnail thumbnail-overlay\">
                <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                </div>
                <i class=\"far fa-play-circle\"></i>
            </div>            
            <p class=\"mt-0\" >{$title}</p>
            </div>
        </div>";
            }
            ?>
        </div>

    </div>
</section>


<!--<section class="nCommentary" id="podcast">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>Podcast</h3>
            <a href="./ceo-podcast">See All</a>
        </div>
        <div class="row">
            <?php
            $filteredlatestCeoPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });

            usort($filteredlatestCeoPodcast, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });

            $latestCeoPodcast = array_slice($filteredlatestCeoPodcast, 0, 4);
            foreach ($latestCeoPodcast as $video) {
                if ($video['date']) {
                    $title = $video['date'] . " - " . $video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box mb-4\">
                <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                <a href=\"ceo-podcast/{$video['slug']}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p class=\"mt-0\" >{$title}</p>
                </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>-->


<section class="nCommentary" id="short-videos">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>Short Videos</h3>
            <a href="https://www.youtube.com/@CancerVAX/shorts" target="_blank">See All</a>
        </div>
        <div class="row">

            <?php
            $filteredlatestShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-videos' && $item['scope'] === 'public';
            });
            // usort($filteredlatestShortVideos, function ($a, $b) {
            //     return strtotime($b['date']) - strtotime($a['date']);
            // });

            $latestCancerShortVideos = array_slice($filteredlatestShortVideos, 0, 4);
            foreach ($latestCancerShortVideos as $video) {

                if ($video['date'] === " ") {
                    $title = $video['date'] - $video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box mb-4\">
                <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                <a href=\"short-videos/{$video['slug']}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p class=\"mt-0\" >{$title}</p>
                </div>
                </div>";
            }
            ?>

        </div>
    </div>
</section>



<?php
include('../footer.php'); ?>