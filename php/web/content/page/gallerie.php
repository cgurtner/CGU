<?php

$owner = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/?access_token=' . CONFIG['instagram-token']), true)['data'];
$recent = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . CONFIG['instagram-token']), true)['data'];
$embedCode = array();
foreach ($recent as $snippet) {
    $embedCode[] = json_decode(file_get_contents('https://api.instagram.com/oembed/?omitscript=true&url=' . $snippet['link']), true)['html'];
}

?>
<main>
    <div class="container">
        <section>
            <?php include_once("content/comp/header.php"); ?>
            <?php
            $rowCounter = 1;
            $html = '';
            foreach ($embedCode as $codeSnippet) {
                if ($rowCounter == 1) {
                    $html .= '<div class="row">';
                }
                $html .= '<div class="col-sm-12 col-md-6">';
                $html .= $codeSnippet;
                $html .= '</div>';
                if ($rowCounter % 2 == 0) {
                    $html .= '</div>';
                    $html .= '<div class="row">';
                }
                $rowCounter++;
            }
            $html .= '</div>';
            echo $html;
            ?>
        </section>
    </div>
</main>