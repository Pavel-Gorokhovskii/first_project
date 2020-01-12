<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 48px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $s = 100; // рублей мы имеем
    $k = 12; // % годовых
    $n = 1; // это переменная обозначает месяцы, в изначальном значении равна 1, делаем вклад на 12 месяцев.
    for (; $n <= 12; $n++) {
        $s = $s + ($s  * (($k / 12)*0.01));
    }
    echo $s;
    ?>
</body>
</html>
