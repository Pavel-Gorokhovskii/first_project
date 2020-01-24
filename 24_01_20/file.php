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
    $fp = fopen("counter.txt", "r");
    $num = fgets($fp);
    fclose($fp);
    $num++;
    echo $num;
    $fp = fopen("counter.txt", "w");
    fwrite($fp, $num);
    fclose($fp);
    ?>
</body>

</html>