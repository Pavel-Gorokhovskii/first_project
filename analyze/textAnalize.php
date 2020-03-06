<?php
preg_match_all('/\w+/iu', $_POST['text'], $mathes);
foreach ($mathes[0] as $_POST['text']) {
    $arr[$_POST['text']]++;
}
foreach ($arr as $value => $key) {
    echo $value . " - " . $key . " раза" . "<br>";
}
