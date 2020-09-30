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
    <link rel="stylesheet" href="/gui/css/web-1.0.16.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body <?php if ($page['url'] == 'home') {
    echo 'class="bg-fullscreen"';
} ?>>
<?php include_once("content/comp/nav.php"); ?>
<?php include_once($page['path']); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="/gui/js/jquery-3.3.1.js"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/gui/js/web-1.0.10.js"></script>
</body>
</html><?php

function sendEmail($input)
{
    require_once("vendor/phpmailer/phpmailer/src/Exception.php");
    require_once("vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require_once("vendor/phpmailer/phpmailer/src/SMTP.php");

    $fieldMapping = array(
        'name' => 'Nachname',
        'vname' => 'Vorname',
        'email' => 'E-Mail',
        'message' => 'Nachricht'
    );

    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->Host = CONFIG['email.smtp.host'];
        $mail->Username = CONFIG['email.smtp.user'];
        $mail->Password = CONFIG['email.smtp.password'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = "UTF-8";

        $mail->setFrom(CONFIG['email.from.address'], CONFIG['email.from.name']);
        $mail->addAddress(CONFIG['email.to.address']);
        $mail->isHTML(false);

        $now = new DateTime();
        $now->setTimezone(new DateTimeZone('Europe/Zurich'));
        $mail->Subject = 'CGU / Kontaktaufnahme ' . $now->format('d.m.Y H:i:s');
        $mail->Body = 'CGU / Kontaktaufnahme ' . $now->format('d.m.Y H:i:s') . "\n\n";
        foreach ($fieldMapping as $field => $trans) {
            $nBreak = '';
            $bBreak = '';
            if ($field == 'message') {
                $bBreak .= "\n";
                $nBreak .= "\n";
            }
            $mail->Body .= $bBreak . $trans . ': ' . $nBreak . $input[$field] . "\n";
        }
        if ($mail->send()) {
            return true;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function contactFormData()
{
    $ret = array();
    $fields = array('name', 'vname', 'email', 'message', 'g-recaptcha-response');
    foreach ($fields as $field) {
        $ret[$field] = readPostParam($field);
    }
    return $ret;
}

function contactFormError($data)
{
    $ret = array();
    $fields = array('name', 'vname', 'email', 'message', 'g-recaptcha-response');
    foreach ($fields as $field) {
        $ret[$field . '-valid'] = checkIfNotEmpty($data[$field]);
        if ($field == 'email') {
            $ret[$field . '-valid'] = checkEmail($data[$field]);
        }
    }
    $captchaPost = json_decode(postRequest('https://www.google.com/recaptcha/api/siteverify', array(
        'response' => $data['g-recaptcha-response'],
        'secret' => CONFIG['recaptcha-secret-key']
    )), true);
    if ($captchaPost && $captchaPost['success'] == true) {
        $ret['g-recaptcha-response-valid'] = true;
    } else {
        $ret['g-recaptcha-response-valid'] = false;
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

function postRequest($url, $data) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $ret = curl_exec($ch);
    curl_close($ch);

    return $ret;
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