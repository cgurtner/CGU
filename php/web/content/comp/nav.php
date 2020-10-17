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
                <div class="navbar-nav ml-md-auto"><?php
                    foreach (PAGES as $p) {
                        if ($p['disabled'] || !$p['display']) {
                            continue;
                        }
                        $active = getActive($p, $page['url']);
                        echo '<a href="' . $p['url'] . '" class="nav-item nav-link ' . $active . '">' . $p['meta']['title'] . '</a>';
                    }
                    ?></div>
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