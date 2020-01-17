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
    function factorial($n)
    {
        $f = 1;
        for ($i = 1; $i <= $n; $i++) {
            $f = $f * $i;
        }
        return $f;
    }
    echo factorial(0);
    echo "<br>";
    echo factorial(1);
    echo "<br>";
    echo factorial(2);
    echo "<br>";
    echo factorial(3);
    echo "<br>";
    ?>
</body>
</html>