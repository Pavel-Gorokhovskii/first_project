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
    function maxx($arr)
    {
        reset($arr);
        $max = current($arr);
        foreach ($arr as $v) {
            if ($v > $max)
                $max = $v;
        }
        return $max;
    }
    echo maxx([357, 1003, 2000, 5, 4, 12, 10]);
    echo "<br>";
    echo maxx([-3570, -10030, -2000, -5000, -4000, -12000, -10000]);
    echo "<br>";
    echo maxx([0 => 1, 1 => 54, 2 => 2000, 3 => 5, 4 => 62, 5 => 137]);
    echo "<br>";
    echo maxx(["one" => 1, "two" => 2000, "three" => 65, "four" => 5]);
    echo "<br>";
    
    ?>
</body>

</html>