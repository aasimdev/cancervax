<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); 


//Get videos from channel by YouTube Data API
$API_key    = 'AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA'; //my API key
$channelID  = 'UCYV5rdW6E3gRPlVB_JoiSIQ'; //my channel ID
$maxResults = 1000000;

$video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $channelID . '&maxResults=' . $maxResults . '&key=' . $API_key . ''));
$playlists = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1000000&playlistId=PLU7CzU0ICHQyRnp8ZQC2u2uT5Ti3TGDHt&key=AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA'));

// echo '<pre>';
// print_r($playlists);
// echo '</pre>';

?>


<section class="nCommentary theme-bg">
    <div class="container">
        <!-- <div class="nCommentary-heading">
            <h3>CEO Podcast</h3>
            <a href="/ceo-podcast">See All</a>
        </div> -->
        <div class="row">
            <?php
            foreach ($video_list->items as $item) {

                //Embed video
                if (isset($item->id->videoId)) {
                    $titleCleaned = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $item->snippet->title));
                    $titleCleaned = rtrim($titleCleaned, '-');
                    echo ' <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="cchat">
                        <div class="cchat-box mb-4">
                        <a href="single-video.php?v=' . $item->id->videoId . '&title=' . $titleCleaned . '"></a>
                        <div class="cchat-thumbnail thumbnail-overlay">
                            <img src=' . $item->snippet->thumbnails->high->url . ' />
                        </div>
                        <i class="far fa-play-circle"></i>
                    </div>
                            <p class="mt-0">' . $item->snippet->title . '</p>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</section>





<?php
include('footer.php'); ?>