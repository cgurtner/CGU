<?php

$breadLinks = '<li class="breadcrumb-item" property="itemListElement" typeof="ListItem">';
$breadLinks .= '<a property="item" typeof="WebPage" href="home">Home</a>';
$breadLinks .= '<meta property="position" content="1">';
$breadLinks .= '</li>';
if ($page['type'] === 'blog') {
    $breadLinks .= '<li class="breadcrumb-item" property="itemListElement" typeof="ListItem">';
    $breadLinks .= '<a property="item" typeof="WebPage" href="blog">Blog</a>';
    $breadLinks .= '<meta property="position" content="2">';
    $breadLinks .= '</li>';

    $breadLinks .= '<li class="breadcrumb-item active" aria-current="page" property="itemListElement" typeof="ListItem">';
    $breadLinks .= '<a href="' . $page['url'] . '" property="item" typeof="WebPage">';
    $breadLinks .= $page['meta']['title'];
    $breadLinks .= '</a>';
    $breadLinks .= '<meta property="position" content="3">';
    $breadLinks .= '</li>';
} else if ($page['type'] == 'project') {
    $breadLinks .= '<li class="breadcrumb-item" property="itemListElement" typeof="ListItem">';
    $breadLinks .= '<a property="item" typeof="WebPage" href="projekte">Projekte</a>';
    $breadLinks .= '<meta property="position" content="2">';
    $breadLinks .= '</li>';

    $breadLinks .= '<li class="breadcrumb-item active" aria-current="page" property="itemListElement" typeof="ListItem">';
    $breadLinks .= '<a href="' . $page['url'] . '" property="item" typeof="WebPage">';
    $breadLinks .= $page['meta']['title'];
    $breadLinks .= '</a>';
    $breadLinks .= '<meta property="position" content="3">';
    $breadLinks .= '</li>';
} else {
    $breadLinks .= '<li class="breadcrumb-item active" aria-current="page" property="itemListElement" typeof="ListItem">';
    $breadLinks .= '<a href="' . $page['url'] . '" property="item" typeof="WebPage">';
    $breadLinks .= $page['meta']['title'];
    $breadLinks .= '</a>';
    $breadLinks .= '<meta property="position" content="2">';
    $breadLinks .= '</li>';
}

?>
<header>
    <div class="row">
        <div class="col pt-5 h1-box">
            <h1><?php echo $page['meta']['title']; ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php echo $breadLinks; ?>
                </ol>
            </nav>
        </div>
    </div>
</header>