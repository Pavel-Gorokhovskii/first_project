<?php
function smile($emodzi)
{
    $emodzi = $_POST['text'];
    $arr = ['/\:\-\)/', '/\:\-\(/', '/\:\)/', '/\:\(/'];
    $arrImg = ['<img src = "emodzi\smaili\ab.bmp">', '<img src = "emodzi\smaili\ac.bmp">', '<img src = "emodzi\smaili\ag.bmp">', '<img src = "emodzi\smaili\av.bmp">'];
    $emodzi =  preg_replace($arr, $arrImg, $emodzi);
    return $emodzi;
}
