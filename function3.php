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
    $b = 20;
    $c = 23;

    function maxx($a, $b, $c)
    {
        if ($a > $b) {
            $buf = $a;
        } else {
            $buf = $b;
        }


        if ($c > $buf) {
            $buf = $c;
        }
        return $buf;
    }
    echo maxx($a, $b, $c);


    ?>

</body>

</html>