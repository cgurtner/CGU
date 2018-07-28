<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                foreach (PAGES as $p) {
                    if ($p['disabled'] || !$p['display']) {
                        continue;
                    }
                    $active = getActive($p, $page['url']);
                    echo '<a href="' . $p['url'] . '" hreflang="de" class="nav-item nav-link ' . $active . '">' . $p['meta']['title'] . '</a>';
                }
                ?>
            </div>
        </div>
    </nav>
</header>
<?php

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