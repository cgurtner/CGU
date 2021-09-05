<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark <?php if ($page['url'] == 'home') { echo 'navbar-home'; } ?>">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/gui/image/logo-bw-no-name.png" class="d-inline-block align-top" alt="Logo Cyrill Gurtner" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav navbar-nav-social d-none d-lg-inline-flex"><?php
                    $socials = '';
                    foreach (CONFIG['socials'] as $social) {
                        $socials .= '<li class="nav-item">';
                        $socials .= '<a href="' . $social['url'] . '" class="nav-link" rel="noreferrer" target="_blank" data-toggle="tooltip" data-placement="bottom" title="' . $social['title'] . '">';
                        $socials .= '<i class="' . $social['class'] . '"></i>';
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
                        echo '<a href="' . $p['url'] . '" class="nav-item nav-link ' . $active . '">' . $p['meta']['title'] . '</a>';
                    }
                    ?></div>
                <ul class="navbar-nav navbar-nav-social navbar-nav-social-mobile ml-md-auto d-lg-none">
                    <li class="nav-item"><?php
                        $socials = '';
                        foreach (CONFIG['socials'] as $social) {
                            $socials .= '<a href="' . $social['url'] . '" rel="noreferrer" target="_blank" class="nav-link" style="display: inline-block; padding-bottom: .5rem;">';
                            $socials .= '<i class="fab ' . $social['icon'] . '"></i>';
                            $socials .= '</a>';
                        }
                        echo $socials;
                        ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php

function getActive($page, $url)
{
    $ret = '';
    if ($page['url'] == $url) {
        $ret = 'active';
    }
    return $ret;
}

?>