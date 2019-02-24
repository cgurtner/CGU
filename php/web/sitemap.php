<?php

require_once('config/config.php');
require_once('content/content.php');

// enable error reporting for dev system
if ($CONFIG['system'] == 'dev') {
    error_reporting(-1);
    ini_set('display_errors', 1);
}

$output = '';
$output .= '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($PAGES as $p) {
    if ($p['disabled']) {
        continue;
    }
    $url = $CONFIG['baseUrl'] . $p['url'];
    if ($p['url'] == 'home') {
        $url = $CONFIG['baseUrl'];
    }
    $output .= '<url>' . "\n";
    $output .= '<loc>' . $url . '</loc>' . "\n";
    $output .= '</url>' . "\n";
}

$output .= '</urlset>';

header("Content-type: text/xml; charset=utf-8");
echo $output;