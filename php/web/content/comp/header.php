<?php

$breadLinks = '<li class="breadcrumb-item"><a href="home">Home</a></li>';
if ($page['type'] === 'blog') {
    $breadLinks = '<li class="breadcrumb-item"><a href="blog">Blog</a></li>';
    $breadLinks .= '<li class="breadcrumb-item active" aria-current="page">' . $page['title'] . '</li>';
} else {
    $breadLinks .= '<li class="breadcrumb-item active" aria-current="page">' . $page['title'] . '</li>';
}

?>
<header>
    <div class="row">
        <div class="col pt-5 h1-box">
            <h1><?php echo $page['title']; ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php echo $breadLinks; ?>
                </ol>
            </nav>
        </div>
    </div>
</header>