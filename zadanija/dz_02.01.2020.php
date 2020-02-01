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
    $b = 4;
    $c = 3;
    $d = 2;
    $e = 1;
    if ($a > $b && $a > $c && $a > $d && $a > $e) {
        echo "a наибольшее число";
    } elseif ($b > $a && $b > $c && $b > $d && $b > $e) {
        echo "b наибольшее число";
    } elseif ($c > $b && $c > $a && $c > $d && $c > $e) {
        echo "c наибольшее число";
    } elseif ($d > $b && $d > $c && $d > $a && $d > $e) {
        echo "d наибольшее число";
    } elseif ($e > $b && $e > $c && $e > $d && $e > $a) {
        echo "e наибольшее число";
    }
    ?>
</body>

</html>