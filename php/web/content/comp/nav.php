<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
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
                <ul class="navbar-nav ml-md-auto d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a href="blog" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Mein Blog"
                           itemprop="sameAs"><i class="fas fa-rss-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['gitlab']; ?>" class="nav-link" target="_blank" data-toggle="tooltip"
                           data-placement="bottom" title="Mein GitLab"><i
                                    class="fab fa-gitlab"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['instagram']; ?>" class="nav-link last-nav-item" target="_blank"
                           data-toggle="tooltip" data-placement="bottom" title="Mein Instagram"><i
                                    class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto d-lg-none">
                    <li class="nav-item">
                        <a href="blog" class="nav-link" style="display: inline-block;"><i class="fas fa-rss-square"></i></a>
                        <a href="<?php echo CONFIG['gitlab']; ?>" target="_blank" class="nav-link"
                           style="display: inline-block; margin-left: 3px;"><i class="fab fa-gitlab"></i></a>
                        <a href="<?php echo CONFIG['instagram']; ?>" target="_blank" class="nav-link"
                           style="display: inline-block; margin-left: 3px;"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
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
        $page['url'] === 'blog' && strpos($url, 'blog') === 0 ||
        $page['url'] === 'projekte' && strpos($url, 'projekte') === 0
    ) {
        $ret = 'active';
    }
    return $ret;
}

?>