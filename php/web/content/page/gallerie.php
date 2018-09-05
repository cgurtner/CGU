<?php

$recent = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . CONFIG['instagram-token']), true)['data'];

?>
<main>
    <div class="container">
        <section>
            <?php include_once("content/comp/header.php"); ?>
            <section>
                <header>
                    <div class="row">
                        <div class="col-sm-2 d-none d-sm-block">
                            <img src="<?php echo $_SESSION['instagram_owner']['profile_picture']; ?>"
                                 alt="Cyrill Gurtner Instagram Profilbild"
                                 class="insta-profile-picture img-fluid">
                        </div>
                        <div class="col-12 col-sm-10">
                            <h2 class="insta-title"><a href="<?php echo CONFIG['instagram']; ?>"
                                   target="_blank"><?php echo $_SESSION['instagram_owner']['username']; ?></a></h2>
                            <p>
                                <span><strong><?php echo $_SESSION['instagram_owner']['counts']['media']; ?></strong> post</span>
                                <span><strong><?php echo $_SESSION['instagram_owner']['counts']['followed_by']; ?></strong> follower</span>
                                <span><strong><?php echo $_SESSION['instagram_owner']['counts']['follows']; ?></strong> following</span>
                            </p>
                            <p>
                                <span><strong><?php echo $_SESSION['instagram_owner']['full_name']; ?></strong></span><br/>
                                <?php
                                echo str_replace(CONFIG['email']['to']['address'], '<a href="mailto:' . CONFIG['email']['to']['address'] . '">' . CONFIG['email']['to']['address'] . '</a>', nl2br($_SESSION['instagram_owner']['bio']));
                                ?>
                            </p>
                        </div>
                    </div>
                </header>
                <hr class="insta-delimiter">
                <?php
                $rowCounter = 1;
                $html = '';
                foreach ($recent as $snippet) {
                    if ($rowCounter == 1) {
                        $html .= '<div class="row">';
                    }
                    $html .= '<div class="col-12 col-sm-6 col-md-4">';
                    $html .= '<a href="' . $snippet['link'] . '" target="_blank">';
                    $html .= '<img src="' . $snippet['images']['standard_resolution']['url'] . '" alt="" class="img-fluid insta-thumb">';
                    $html .= '</a>';
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