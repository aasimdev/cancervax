<?php
// Dedicated alternate clone of the current people page.
ob_start();
require __DIR__ . '/home-sep-1-impact-people.php';
$alternatePage = ob_get_clean();

$alternatePage .= <<<'HTML'
<style>
    body.home-sep-1-impact-people-alternate-page .home-aug-28-c-story-title {
        background-image: url("/assets/images/home-sep-1-impact-people-alternate-background.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
HTML;

echo $alternatePage;