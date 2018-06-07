<?php

define("CONFIG", json_decode(file_get_contents("config.json"), true));
define("PAGES", json_decode(file_get_contents("content/content.json"), true));
define("LANG", "de");

$output = '';
$output .= '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach (PAGES as $p) {
    if ($p['disabled']) {
        continue;
    }
    $url = CONFIG['baseURL'] . $p['url'];
    $output .= '<url>' . "\n";
    $output .= '<loc>' . $url . '</loc>' . "\n";
    $output .= '</url>' . "\n";
}

$output .= '</urlset>';

header("Content-type: text/xml; charset=utf-8");
echo $output;