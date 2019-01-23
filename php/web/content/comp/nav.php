<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home" hreflang="de">Cyrill Gurtner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav navbar-nav-social d-none d-lg-inline-flex"><?php
                    $socials = '';
                    foreach (CONFIG['socials'] as $social) {
                        $socials .= '<li class="nav-item">';
                        $socials .= '<a href="' . $social['url'] . '" class="nav-link" target="_blank" data-toggle="tooltip" data-placement="bottom" title="' . $social['title'] . '">';
                        $socials .= '<i class="fab ' . $social['icon'] . '"></i>';
                        $socials .= '</a>';
                        $socials .= '</li>';
                    }
                    echo $socials;
                    ?></ul>
                <div class="navbar-nav ml-md-auto"><?php
                    foreach (PAGES as $p) {
                        if ($p['disabled'] || !$p['display']) {
                            continue;
                        }
                        $active = getActive($p, $page['url']);
                        echo '<a href="' . $p['url'] . '" hreflang="de" class="nav-item nav-link ' . $active . '">' . $p['meta']['title'] . '</a>';
                    }
                    ?></div>
                <ul class="navbar-nav navbar-nav-social navbar-nav-social-mobile ml-md-auto d-lg-none">
                    <li class="nav-item"><?php
                        $socials = '';
                        foreach (CONFIG['socials'] as $social) {
                            $socials .= '<a href="' . $social['url'] . '" target="_blank" class="nav-link" style="display: inline-block;">';
                            $socials .= '<i class="fab ' . $social['icon'] . '"></i>';
                            $socials .= '</a>';
                        }
                        echo $socials;
                        ?></li>
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