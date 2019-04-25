<?php

require_once('config/config.php');
require_once('content/content.php');

define("CONFIG", $CONFIG);
define("PAGES", $PAGES);

// enable error reporting for dev system
if (CONFIG['system'] == 'dev') {
    error_reporting(-1);
    ini_set('display_errors', 1);
}

$recent = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . CONFIG['instagram-auth']), true)['data'];

$rowCounter = 1;
$html = '';
foreach ($recent as $snippet) {
    if ($rowCounter == 1) {
        $html .= '<div class="row insta-row">';
    }
    $html .= '<div class="col-4">';
    $html .= '<a href="' . $snippet['link'] . '" target="_blank">';
    $html .= '<img src="' . $snippet['images']['standard_resolution']['url'] . '" alt="" class="img-fluid insta-thumb">';
    $html .= '</a>';
    $html .= '</div>';
    if ($rowCounter % 3 == 0) {
        $html .= '</div>';
        $html .= '<div class="row insta-row">';
    }
    $rowCounter++;
}
$html .= '</div>';
echo $html;