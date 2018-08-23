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
                $date = new DateTime($page['meta']['date']);
                $title = $page['meta']['title'];
                $description = $page['meta']['description'];

                $html .= '<section>';
                $html .= '<div class="row">';
                $html .= '<div class="col-sm-12">';
                $html .= '<header>';
                $html .= '<h2>' . $title . '</h2>';
                $html .= '</header>';
                $html .= '<p>';
                $html .= $description . ' &nbsp;';
                $html .= '<small><time datetime="' . $date->format('Y-m-d H:i:s') . '">' . $date->format('d.m.y H:i') . '</time></small>';
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