<?php

include 'autoload.php';

function test($str1, $str2, $text = '')
{
    if ($str1 == $str2) {
        echo "Тест $text пройден";
    } else {
        echo "Тест $text не пройден \n $str1 == $str2\n";
    }
}

$img = new Img();

test(
    "<img src = '1.jpg'>",
    $img->setSrc('1.jpg')->html()
);

test(
    "<img src = '2.jpg' width = '100 height = '100'>",
    $img->setSrc('1.jpg')->setWidth(100)->setHeight(100)
        ->html(),
    "Img"
);

$br = new Br();

test(
    "<br>",
    $br->html(),
    "br"
);
