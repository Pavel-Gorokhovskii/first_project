<?php
if (preg_match(file_get_contents('mat.txt'), $_POST['text'])) {
    echo 'Вы используете ненормативную лексику';
} else {
    echo $_POST['text'];
}
