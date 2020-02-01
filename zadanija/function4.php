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
    $a = 3;
    $b = 5;
    $c = 6;
    $d = 1;

    function maxx($a, $b, $c, $d)
    {
        if ($a > $b) {
            $buf = $a;
        } else {
            $buf = $b;
        }


        if ($c > $buf) {
            $buf = $c;
        }


        if ($d > $buf) {
            $buf = $d;
        }
        return $buf;
    }
    echo maxx($a, $b, $c, $d);


    ?>

</body>

</html>