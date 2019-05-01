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

$json_data = array();
foreach ($recent as $post) {
    $json_data[] = array(
        'link' => $post['link'],
        'src' => $post['images']['standard_resolution']['url'],
        'alt' => ''
    );
}

$fp = fopen(CONFIG['instagram-json-path'], 'w+');
fwrite($fp, json_encode($json_data));
fclose($fp);