<?php
function MarcDown($text)
{
    $pat = ['/\*\*(.*)\*\*/i', '/\*(.*)\*/i', '/\~\~(.*)\~\~/i'];
    $rep = ['<b>$1</b>', '<i>$1</i>', '<s>$1</s>'];
    $text = preg_replace($pat, $rep, $text);
    return $text;
}
