<main class="fade-in">
    <div class="container">
        <section class="mb-5">
            <?php include_once("content/comp/header.php"); ?>
            <?php
            $posts = json_decode(file_get_contents('./file/instagram.json'), true);
            $rowCounter = 1;
            $html = '';
            foreach ($posts as $snippet) {
                if ($rowCounter == 1) {
                    $html .= '<div class="row insta-row">';
                }
                $html .= '<div class="col-4">';
                $html .= '<a href="' . $snippet['link'] . '" target="_blank">';
                $html .= '<img src="' . $snippet['src'] . '" alt="' . $snippet['alt'] . '" class="img-fluid insta-thumb">';
                $html .= '</a>';
                $html .= '</div>';
                if ($rowCounter % 3 == 0) {
                    $html .= '</div>';
                    $html .= '<div class="row insta-row">';
                }
                $rowCounter++;
            }
            $html .= '</div>';
            echo $html;
            ?>
        </section>
    </div>
</main>