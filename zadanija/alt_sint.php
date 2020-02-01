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
    $a = 5;
    if ($a == 5) : ?>
        A is equal to 5
    <?php endif; ?>
    <br>
    <?php
    if ($a == 5) { ?>
        A is equal to 5
    <?php } ?>
    <br>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br>";
    }
    echo "<br>";
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo "$i <br>";
    }
    echo "<br>";
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo "$i <br>";
        $i++;
    }
    echo "<br>";
    $S = 0;
    for ($i = 1; $i <= 10; $i++) {
        $S = $S + $i;
    }
    echo $S;
    echo "<br>";
    $arr = array("one", "two", "three");
    foreach ($arr as $value) {
        echo "Value: $value<br />\n";
    }
    echo "<br>";
    $arr = array("one", "two", "three");
    foreach ($arr as $key => $value) {
        echo "Key: $key; Value: $value<br />\n";
    }
    echo "<br>";
    $s = 0;
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    foreach ($arr as $value) {
        $s = $s + $value;
    }
    echo $s;
    echo "<br>";
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    echo "<br>";
    $i = 1;
    while ($i <= 10) :
        echo $i;
        $i++;
    endwhile;
    echo "<br>";
    $s = 0;
    $i = 1;
    while ($i <= 10) :
        $s = $s + $i;
        $i++;
    endwhile;
    echo $s;
    echo "<br>";
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);
    echo "<br>";
    $i = 3;
    $s = 1;
    do {
        $s = $s * $i ** 2;
        $i++;
    } while ($i <= 12);
    echo $s;
    echo "<br>";
    $P = 1;
    for ($i = 3; $i <= 12; $i++) {
        $P = $P * $i ** 2;
    }
    echo $P;
    echo "<br>";
    $s = 1;
    $arr = array(3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    foreach ($arr as $value) {
        $z = $value ** 2;
        $s = $s * $z;
    }
    echo $s;
    echo "<br>";
    $i = 5;
    switch ($i) {
        case 0:
            echo "ноль";
            break;
        case 1:
            echo "один";
            break;
        case 2:
            echo "два";
            break;
        case 3:
            echo "три";
            break;
        case 4:
            echo "четыре";
            break;
        case 5:
            echo "пять";
            break;
        case 6:
            echo "шесть";
            break;
        case 7:
            echo "семь";
            break;
        case 8:
            echo "восемь";
            break;
        case 9:
            echo "девять";
            break;
        default:
            echo "вы ввели неверное число";
    }
    echo "<br>";
    echo "Цвета $color $fruit";
    echo "<br>";
    include 'vars.php';
    echo "Цвета $color $fruit";
    echo "<br>";
    ?>
</body>

</html>