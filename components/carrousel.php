<?php
function carrousel($images, $url="") {
    $index = 0;

    // console log pour verifier la taille du tableau images
    echo '<script>console.log(' . count($images) . ');</script>';

    if (isset($_GET['index'])) {
        $index = $_GET['index'];
    }
    
    $index = ($index + count($images)) % count($images);

    echo '<div class="flex carrousel">';
    echo '<button class="btn-carrousel"><a href="?index=' . (($index - 1 + count($images)) % count($images))."&".$url. '">⬅</a></button>';
    echo '<img class="img_carrousel img-zoom" src="' . $images[$index] . '"alt="cover image">';
    echo '<button class="btn-carrousel"><a href="?index=' . (($index + 1) % count($images))."&".$url. '">➡</a></button>';
    echo '</div>';
};





?>
