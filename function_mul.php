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


    function mul($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i] * 2;
        }
        return $arr;
    }
    print_r(mul([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));

    ?>

</body>

</html>