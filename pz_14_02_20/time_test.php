<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 24px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <?php
    $time_start = microtime(1);
    for ($i = 0; $i < 1000000000; $i++) {
    }
    $time_end = microtime(1);
    $time = $time_end - $time_start;
    echo "выполнил цикл миллиард раз за $time секунд";
    ?>
</body>

</html>