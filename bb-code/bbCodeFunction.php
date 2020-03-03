<?php
function bbCode($text)
{
    $pat = ['/\[b\](.*)\[\/b\]/i', '/\[i\](.*)\[\/i\]/i', '/\[u\](.*)\[\/u\]/i'];
    $rep = ['<b>$1</b>', '<i>$1</i>', '<u>$1</u>'];
    $text = preg_replace($pat, $rep, $text);
    return $text;
}
function smile($text)
{
    $arr = ['/\:\-\)/', '/\:\-\(/', '/\:\)/', '/\:\(/'];
    $arrImg = ['<img src = "ab.bmp">', '<img src = "ac.bmp">', '<img src = "ag.bmp">', '<img src = "av.bmp">'];
    $text =  preg_replace($arr, $arrImg, $text);
    return $text;
}
function censor($text)
{
    if (preg_match('/(дурак|редиска)/i', $_POST['text'])) {
        echo 'Вы используете ненормативную лексику';
    } else {
        return $text;
    }
}
