<main>
    <div class="container">
        <section>
            <?php include_once("content/comp/header.php"); ?>
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