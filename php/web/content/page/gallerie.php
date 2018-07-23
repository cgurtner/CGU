<?php

$owner = json_decode(file_get_contents('Https://api.instagram.com/v1/users/self/?access_token=' . CONFIG['instagram-token']), true)['data'];
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
            <section>
                <header>
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <img src="<?php echo $owner['profile_picture']; ?>"
                                 alt="Cyrill Gurtner Instragram Profilbild"
                                 class="instagram-profile-picture img-fluid mb-3">
                        </div>
                        <div class="col-12 col-sm-10">
                            <h2><a href="<?php echo CONFIG['instagram']; ?>" target="_blank"><?php echo $owner['username']; ?></a></h2>
                            <p>
                                <span><strong><?php echo $owner['counts']['media']; ?></strong> post</span>
                                <span><strong><?php echo $owner['counts']['followed_by']; ?></strong> follower</span>
                                <span><strong><?php echo $owner['counts']['follows']; ?></strong> following</span>
                            </p>
                            <p>
                                <span><strong><?php echo $owner['full_name']; ?></strong></span><br/>
                                <?php echo nl2br($owner['bio']); ?>
                            </p>
                        </div>
                    </div>
                </header>
                <hr class="instagram-delimiter">
                <?php
                $rowCounter = 1;
                $html = '';
                foreach ($embedCode as $codeSnippet) {
                    if ($rowCounter == 1) {
                        $html .= '<div class="row">';
                    }
                    $html .= '<div class="col-sm-12 col-md-4">';
                    $html .= $codeSnippet;
                    $html .= '</div>';
                    if ($rowCounter % 3 == 0) {
                        $html .= '</div>';
                        $html .= '<div class="row">';
                    }
                    $rowCounter++;
                }
                $html .= '</div>';
                echo $html;
                ?>
            </section>
        </section>
    </div>
</main>