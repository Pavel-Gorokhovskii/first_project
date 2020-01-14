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
    $x = 86;
    $z = 55;

    function maxx($x, $z)
    {
        if ($x > $z) {
            $c = $x;
        } else {
            $c = $z;
        }
        return $c;
    }
    echo maxx($x, $z);


    ?>

</body>

</html>