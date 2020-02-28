<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {


            font-size: 28pt;

        }
    </style>
</head>

<body>

</body>

</html>
<?php
if (preg_match('/@/', 'vstu@mail.ru')) {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br>';
// Символ "i" после закрывающего
// ограничителя шаблона означает 
// регистронезависимый поиск.
if (preg_match("/php/i", "PHP is programming language")) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
echo '<br>';
$str = 'hypertext4language5programming';
$chars = preg_split('/\d/', $str);
print_r($chars);
echo '<br>';
$stri = "not to be";
$pat = "/^(be)|(not\sto\sbe)$/i";
if (preg_match($pat, $stri)) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
echo '<br>';
$str = 'Всем <b>Привет</b>!!!';
$pat = '/<b>.*<\/b>/i';
$rep = '<i>$0</i>';
$str2 = preg_replace($pat, $rep, $str);
echo $str2;
echo '<br>';
$str = 'Всем <b>Привет</b>!!!';
$pat = '/<b>(.*)<\/b>/i';
$rep = '<i>$1</i>';
$str2 = preg_replace($pat, $rep, $str);
echo $str2;
echo '<br>';
?>