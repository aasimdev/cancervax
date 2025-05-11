<?php

$GLOBALS['title'] = "Explainer - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";


include('header.php');
?>
<section class="podcast-detail">
<div class="container">
    <div class="podcast-detail-wrap">
        <h1>Short Explainer Video</h1>
         <div class="podcast-video" style="position: relative;">
         <iframe
  title="vimeo-player"
  id="explainer-video"
  class="w-full aspect-video"
  src="https://player.vimeo.com/video/1074002405?controls=0&muted=1&autoplay=0"
  allow="autoplay; fullscreen; picture-in-picture"
  frameborder="0"
  allowfullscreen
  playsinline
></iframe>

                    <div class="vimeo-custom-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display:flex; align-items:center; justify-content:center; cursor:pointer;">
                <svg class="sm:w-[100px] sm:h-[100px] w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 56 56" fill="none">
                    <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="0.8"></circle>
                    <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z" fill="black"></path>
                </svg>
            </div>
        </div> 
    </div>
</div>
</section>

<?php include('footer.php'); ?>