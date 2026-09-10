<?php
// Dedicated impact page: preserve the August 31 upper content while using
// the September 1 QA'd team, partner, news, and newsletter sections below it.
ob_start();
require __DIR__ . '/home-aug-31.php';
$impactPage = ob_get_clean();

$sepStyles = '';
ob_start();
require __DIR__ . '/home-sep-1.php';
$sepPage = ob_get_clean();

if (preg_match('/<style\b[^>]*>.*?<\/style>/is', $sepPage, $styleMatch) !== 1) {
    throw new RuntimeException('Unable to load September 1 page styles for the impact page.');
}
$sepStyles = $styleMatch[0];

$impactTeamStart = strpos($impactPage, '<section class="bg-team-first');
$sepTeamStart = strpos($sepPage, '<section class="bg-team-first');

if ($impactTeamStart === false || $sepTeamStart === false) {
    throw new RuntimeException('Unable to locate the team section boundary for the impact page.');
}

$impactPage = substr($impactPage, 0, $impactTeamStart) . substr($sepPage, $sepTeamStart);
$impactPage = preg_replace('/<\/style>/i', '</style>' . $sepStyles, $impactPage, 1);
$impactPage .= <<<'HTML'
<style>
    body.home-sep-1-impact-people-page .home-aug-28-c-story-title {
        background-color: #2A5C6E;
        background-image: url("/assets/images/home-sep-1-impact-people-background.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 570.24px;
    }

    body.home-sep-1-impact-people-page .home-aug-28-c-story-body li::before {
        display: block !important;
        flex: 0 0 30px;
        content: "•" !important;
        color: #ffffff;
        font-size: 49px;
        font-weight: 700;
        line-height: 0.7;
        margin-top: -7px;
        text-align: center;
    }

    @media (max-width: 767px) {
        body.home-sep-1-impact-people-page .home-aug-28-c-story-title {
            min-height: 462px;
        }

        body > .sticky > .bg-custom-teal-100 > .container-fluid > .relative > .theme-btn.orange-btn {
            position: relative;
            left: 7.5px;
        }
    }

    @media (min-width: 768px) {
        body > .sticky > .bg-custom-teal-100 > .container-fluid > .relative > .theme-btn.orange-btn {
            left: calc(50% + 7.5px) !important;
        }
    }
</style>
HTML;

$impactHeadline = ($page ?? '') === 'home-sep-1-impact-people'
    ? 'Developing a Revolutionary<br><span class="home-aug-28-c-story-title-second-line">Cancer Treatment</span>'
    : 'Developing A Revolutionary<br><span class="home-aug-28-c-story-title-second-line">Cancer Treatment</span>';

$impactPage = str_replace(
    '<h1 class="mx-auto max-w-[1200px] text-center text-[32px] font-bold leading-tight text-white sm:text-[46px] md:text-[60px]">A Revolutionary<br><span class="home-aug-28-c-story-title-second-line">Cancer Treatment</span></h1>',
    '<h1 class="mx-auto max-w-[1200px] text-center text-[32px] font-bold leading-tight text-white sm:text-[46px] md:text-[60px]">' . $impactHeadline . '</h1>',
    $impactPage
);

echo $impactPage;