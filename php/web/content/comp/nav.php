<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php
                    $pageCount = countPossiblePages();
                    $counter = 1;
                    foreach (PAGES as $p) {
                        if ($p['disabled'] || !$p['display']) {
                            continue;
                        }
                        $last = '';
                        if ($counter == $pageCount) {
                            $last = 'last-nav-item';
                        }
                        $active = getActive($p, $page['url']);
                        echo '<a href="' . $p['url'] . '" hreflang="de" class="nav-item nav-link ' . $active . ' ' . $last . '">' . $p['meta']['title'] . '</a>';
                        $counter++;
                    }
                    ?>
                </div>
                <ul class="navbar-nav ml-md-auto d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['gitlab']; ?>" class="nav-link" target="_blank"><i class="fab fa-gitlab"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['instagram']; ?>" class="nav-link last-nav-item" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto d-lg-none">
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['gitlab']; ?>" target="_blank" class="nav-link" style="display: inline-block;"><i class="fab fa-gitlab"></i></a>
                        <a href="<?php echo CONFIG['instagram']; ?>" target="_blank" class="nav-link" style="display: inline-block; margin-left: 5px;"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php

function countPossiblePages() {
    $ret = 0;
    foreach (PAGES as $p) {
        if ($p['disabled'] || !$p['display']) {
            continue;
        }
        $ret++;
    }
    return $ret;
}

function getActive($page, $url)
{
    $ret = '';
    if (
        $page['url'] == $url ||
        $page['url'] === 'blog' && strpos($url, 'blog') === 0
    ) {
        $ret = 'active';
    }
    return $ret;
}

?>