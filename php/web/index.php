<?php

session_start();

define("CONFIG", json_decode(file_get_contents("config.json"), true));
define("PAGES", json_decode(file_get_contents("content/content.json"), true));

// enable error reporting for dev system
if (CONFIG['system'] == 'dev') {
    error_reporting(-1);
    ini_set('display_errors', 1);
}

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

$pageTitle = 'Cyrill Gurtner';
if ($page['url'] === 'home') {
    $pageTitle = $pageTitle . ' | Software Developer';
} else if ($page['url'] !== 'home' && $page['type'] === 'page') {
    $pageTitle = $page['meta']['title'] . ' | ' . $pageTitle;
}

?>
    <!DOCTYPE HTML>
    <html lang="de">
    <head>
        <base href="<?php echo CONFIG['baseUrl']; ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $page['meta']['description']; ?>">
        <link rel="icon" href="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="gui/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="gui/css/web-1.0.0.css">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
    <?php include_once("content/comp/nav.php"); ?>
    <?php include_once($page['path']); ?>
    <script src="gui/js/jquery-3.3.1.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="gui/js/web-1.0.0.js"></script>
    </body>
    </html>
<?php

function sendEmail($input)
{
    require_once("vendor/phpmailer/phpmailer/src/Exception.php");
    require_once("vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require_once("vendor/phpmailer/phpmailer/src/SMTP.php");

    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->Host = CONFIG['email']['smtp']['host'];
        $mail->Username = CONFIG['email']['smtp']['user'];
        $mail->Password = CONFIG['email']['smtp']['password'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = "UTF-8";

        $mail->setFrom(CONFIG['email']['from']['address'], CONFIG['email']['from']['name']);
        $mail->addAddress(CONFIG['email']['to']['address']);
        $mail->isHTML(false);

        $now = new DateTime();
        $mail->Subject = 'CGU / Kontaktaufnahme ' . $now->format('d.m.Y H:i:s');
        $mail->Body = 'CGU / Kontaktaufnahme ' . $now->format('d.m.Y H:i:s') . "\n\n";
        foreach ($input['data'] as $contactKey => $contactData) {
            $nBreak = '';
            $bBreak = '';
            if ($contactKey == 'message') {
                $bBreak .= "\n";
                $nBreak .= "\n";
            }
            $mail->Body .= $bBreak . $contactKey . ': ' . $nBreak . $contactData . "\n";
        }
        if ($mail->send()) {
            return true;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function checkContactForm()
{
    if (!isset($_POST['contact'])) {
        return array();
    }

    $ret = array();
    $fields = array('name', 'vname', 'email', 'message');
    foreach ($fields as $field) {
        $ret['data'][$field] = readPostParam($field);
        $ret['err'][$field . '-empty'] = checkIfNotEmpty($ret['data'][$field]);
        if ($field == 'email') {
            $recgt['err'][$field . '-invalid'] = checkEmail($ret['data'][$field]);
        }
    }
    return $ret;
}

function readPostParam($name)
{
    if (array_key_exists($name, $_POST)) {
        if (is_array($_POST[$name])) {
            $params = $_POST[$name];
            array_walk($params, 'strip_tags');
            array_walk($params, 'trim');
            return $params;
        }
        return trim(strip_tags($_POST[$name]));
    }
    return null;
}

function checkIfNotEmpty($text)
{
    if ($text == null || $text == '') {
        return false;
    }
    return true;
}

function checkEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}