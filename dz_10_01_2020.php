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
    // Через for
    $s = 2000; // рублей мы имеем
    $k = 11.5; // % годовых
    $n = 14; // это переменная обозначает месяцы, в изначальном значении равна 1, делаем вклад на 14 месяцев.
    for ($n = 1; $n <= 14; $n++) {
        $s = $s + $s  * ($k / 12) / 100;
    }
    echo $s;
    echo "<br>";
    // Через while
    $s = 2000; // рублей мы имеем
    $k = 11.5; // % годовых
    $n = 1; // это переменная обозначает месяцы, в изначальном значении равна 1, делаем вклад на 14 месяцев.
    while ($n <= 14) {
        $n++;
        $s = $s + $s  * ($k / 12) / 100;
    }
    echo $s;
    echo "<br>";
    //Через do while
    $s = 2000; // рублей мы имеем
    $k = 11.5; // % годовых
    $n = 1; // это переменная обозначает месяцы, в изначальном значении равна 1, делаем вклад на 14 месяцев.
    do {
        $s = $s + $s  * ($k / 12) / 100;
        $n++;
    } while ($n <= 14);
    echo $s;
    echo "<br>";

    ?>

</body>

</html>