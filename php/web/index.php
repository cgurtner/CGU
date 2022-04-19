<?php

session_start();

require_once('config/config.php');
require_once('content/content.php');

define("CONFIG", $CONFIG);
define("PAGES", $PAGES);

$pageURL = null;
if (isset($_GET['page']) && trim($_GET['page']) != "") {
    $pageURL = trim(strtolower($_GET['page']));
} else {
    $pageURL = "home";
}
$page = null;
foreach (PAGES as $p) {
    if ($p['url'] == $pageURL) {
        $page = $p;
    }
}

if ($page == null || $page['disabled'] || !file_exists($page['path'])) {
    header("HTTP/1.0 404 Not Found");
    include("gui/template/not-found-404.html");
    die();
}

$pageTitle = 'Cyrill Gurtner | Software Developer';
if ($page['url'] === 'home') {
    // ok...
} else if ($page['url'] !== 'home' && $page['type'] === 'page') {
    $pageTitle = $page['meta']['title'] . ' | ' . $pageTitle;
}

?><!DOCTYPE HTML>
<html lang="de">
<head>
    <base href="<?php echo CONFIG['baseUrl']; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $page['meta']['description']; ?>">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="/gui/image/logo-favicon.jpg">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/gui/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/gui/css/web-1.0.19.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body <?php if ($page['url'] == 'home') {
    echo 'class="bg-fullscreen"';
} ?>>
<?php include_once("content/comp/nav.php"); ?>
<?php include_once($page['path']); ?>
<script src="/gui/js/jquery-3.3.1.js"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/gui/js/web-1.0.10.js"></script>
</body>
</html>
