<?php
$text = $_POST['text'];
$pat = file_get_contents('mat.txt');
if (preg_match($pat, $text)) {
    echo 'Вы используете ненормативную лексику';
} else {
    echo $text;
}
