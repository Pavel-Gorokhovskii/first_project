<?php
function saveXML($text, $name, $date)
{
    $str = <<<XML
\n<msg>
<text>$text</text>
<name>$name</name>
<date>$date</date>
</msg>
XML;
    return file_put_contents('data.xml', $str, FILE_APPEND);
}
function readXML($f)
{
    preg_match_all(
        '/<msg>.*?<text>(.*?)<\/text>.*?<name>(.*?)<\/name>.*?<date>(.*?)<\/date>.*?<\/msg>/ius',
        file_get_contents($f),
        $matches
    );

    $arr = [];

    foreach ($matches[1] as $key => $value) {
        $arr[$key]['text'] = $value;
        $arr[$key]['name'] = $matches[2][$key];
        $arr[$key]['date'] = $matches[3][$key];
    }

    return $arr;
}
function smile($text)
{
    $arr = ['/\:\-\)/', '/\:\-\(/', '/\:\)/', '/\:\(/'];
    $arrImg = ['<img src = "ab.bmp">', '<img src = "ac.bmp">', '<img src = "ag.bmp">', '<img src = "av.bmp">'];
    $text =  preg_replace($arr, $arrImg, $text);
    return $text;
}
