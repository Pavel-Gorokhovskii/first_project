<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 24px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $a = "Скажи-ка дядя, ведь не даром";
    $a = mb_strtolower($a);
    echo $a;
    echo "<br>";
    $b = "Москва спаленная пожаром французу отдана";
    $b = mb_strtoupper($b);
    echo $b;
    echo "<br>";
    $c = "Ведь были схватки боевые, да говорят еще какие";
    $c = ucfirst($c);
    echo $c;
    echo "<br>";
    $d = "Не даром помнит вся Россия про день Бородина";
    $d = ucwords($d);
    echo $d;
    echo "<br>";
    $e = "М.Ю.Лермонтов";
    $e = lcfirst($e);
    echo $e;
    $f = "Улыбок тебе дед Макар";
    $f = str_shuffle($f);
    echo "<br>";
    echo $f;
    ?>
</body>

</html>