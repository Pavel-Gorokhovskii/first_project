<?php
    header("Content-Type: text/plain");
    $html = file("http://ru.wikipedia.org/wiki/Гостомысл");
    foreach ($html as $key => $value) {
        echo $key . '|' . $value;
    }
    ?>
    