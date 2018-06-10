<main>
    <div class="container">
        <section>
            <header>
                <div class="row">
                    <div class="col pt-5 h1-box">
                        <h1>Blog</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </header>
            <?php
            $html = '';
            foreach (PAGES as $page) {
                if ($page['type'] !== 'blog') {
                    continue;
                }
                $date = new DateTime($page['info']['date']);
                $title = $page['info']['title'];
                $preview = $page['info']['preview'];

                $html .= '<section>';
                $html .= '<div class="row">';
                $html .= '<div class="col-sm-12">';
                $html .= '<header>';
                $html .= '<h2>' . $title . '<small class="text-muted">&nbsp;';
                $html .= '<time datetime="' . $date->format('Y-m-d H:i:s') . '">' . $date->format('d.m.y H:i') . '</time>';
                $html .= '</small>';
                $html .= '</h2>';
                $html .= '</header>';
                $html .= '<p>';
                $html .= $preview;
                $html .= '</p>';
                $html .= '<a href="' . $page['url'] . '" hreflang="de">Jetzt lesen</a>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</section>';
            }
            echo $html;
            ?>
        </section>
    </div>
</main>