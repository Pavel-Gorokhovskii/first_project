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
    function fibonacci($n)
    {
        if ($n < 3) {
            return 1;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }
    echo fibonacci(25);
    echo "<br>";
    echo fibonacci(5);
    echo "<br>";
    echo fibonacci(10);
    echo "<br>";
    echo fibonacci(3);
    echo "<br>";
    echo fibonacci(1);
    echo "<br>";
    ?>
</body>

</html>