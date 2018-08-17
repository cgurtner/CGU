<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
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