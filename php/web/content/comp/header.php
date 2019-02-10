<?php

$breadLinks = '<li class="breadcrumb-item" property="itemListElement" typeof="ListItem">';
$breadLinks .= '<a property="item" typeof="WebPage" href="home"><span property="name">Home</span></a>';
$breadLinks .= '<meta property="position" content="1">';
$breadLinks .= '</li>';

$breadLinks .= '<li class="breadcrumb-item active" aria-current="page" property="itemListElement" typeof="ListItem">';
$breadLinks .= '<a href="' . $page['url'] . '" property="item" typeof="WebPage">';
$breadLinks .= '<span property="name">';
$breadLinks .= $page['meta']['title'];
$breadLinks .= '</span>';
$breadLinks .= '</a>';
$breadLinks .= '<meta property="position" content="2">';
$breadLinks .= '</li>';

?><header>
    <div class="row">
        <div class="col pt-4 h1-box text-center">
            <img src="/gui/image/portrait.jpg" class="header-thumb" alt="Profilbild Cyrill Gurtner" />
            <h1><?php echo $page['meta']['title']; ?></h1>
            <hr />
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php echo $breadLinks; ?>
                </ol>
            </nav>
        </div>
    </div>
</header>