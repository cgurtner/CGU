<?php

$breadLinks = '<li class="breadcrumb-item">';
$breadLinks .= '<a href="home" hreflang="de">Home</a>';
$breadLinks .= '</li>';

$breadLinks .= '<li class="breadcrumb-item active" aria-current="page">';
$breadLinks .= '<a href="' . $page['url'] . '" hreflang="de">';
$breadLinks .= $page['meta']['title'];
$breadLinks .= '</a>';
$breadLinks .= '</li>';

?><header>
    <div class="row">
        <div class="col pt-5 h1-box text-center">
            <img src="/gui/image/portrait.jpg" class="header-thumb" alt="Profilbild Cyrill Gurtner" />
            <h1><?php echo $page['meta']['title']; ?></h1>
            <hr />
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php echo $breadLinks; ?>
                </ol>
            </nav>
        </div>
    </div>
</header>