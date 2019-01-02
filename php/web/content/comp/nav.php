<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav navbar-nav-social d-none d-lg-inline-flex">
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['gitlab']; ?>" class="nav-link" target="_blank" data-toggle="tooltip"
                           data-placement="bottom" title="Mein GitLab"><i class="fab fa-gitlab"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['instagram']; ?>" class="nav-link" target="_blank"
                           data-toggle="tooltip" data-placement="bottom" title="Mein Instagram"><i
                                    class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <div class="navbar-nav ml-md-auto">
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
                <ul class="navbar-nav navbar-nav-social ml-md-auto d-lg-none">
                    <li class="nav-item">
                        <a href="<?php echo CONFIG['gitlab']; ?>" target="_blank" class="nav-link"
                           style="display: inline-block;"><i class="fab fa-gitlab"></i></a><a
                                href="<?php echo CONFIG['instagram']; ?>" target="_blank" class="nav-link"
                                style="display: inline-block;"><i class="fab fa-instagram"></i></a>
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
    if ($page['url'] == $url) {
        $ret = 'active';
    }
    return $ret;
}

?>