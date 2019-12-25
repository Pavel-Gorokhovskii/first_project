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
            text-align: center;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $a = 5;
    $c = $a << 1;
    echo $c;
    echo "<br>";
    $bool = TRUE; // логический
    $str = "foo"; // строковый
    $int = 12; // целочисленный
    echo gettype($bool); // выводит "boolean"
    echo gettype($str); // выводит "string"
    // Если это целое, увеличить на четыре
    if (is_int($int)) {
        $int += 4;
    }
    // Если $bool - это строка, вывести ее
    // (ничего не выводит)
    if (is_string($bool)) {
        echo "Строка: $bool";
    }
    echo "<br>";
    $a = 0123;
    echo $a;
    echo "<br>";
    $b = 0x1A;
    echo $b;
    echo "<br>";
    $b = 1.2e3;
    echo $b;
    echo "<br>";
    $c = 7e-10;
    $g = 7;
    $h = $g + $c;
    echo $h;
    echo "<br>";
    echo 'Чтобы высести \' надо перед ней поставить \\';
    echo "<br>";
    echo 'Это не вставит: \n новую строку';
    echo "<br>";
    $a = 3;
    echo "\$a=$a";
    echo "<br>";
    echo "Я внес изменения в этот файл дома, 25.12.2019";
    ?>

</body>

</html>