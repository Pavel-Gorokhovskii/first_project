<?php
$str = $_POST['userMail'];
$pat = '/^[A-Z0-9\-]{1,}@[A-Z0-9\-]{2,}\.[A-Z]{2,6}$/i';
if (preg_match($pat, $str)) {
    echo 'да';
} else {
    echo 'нет';
}
