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
    $fileName = "file.txt";
    if (file_exists($fileName)) {
        $num = file_get_contents($fileName);
        $num++;

        $file = fopen($fileName, "w");
        fwrite($file, $num);
        fclose($file);
    } else {
        $num = 0;
        file_put_contents($fileName, $num);
    }
    echo "Вы обновили страницу {$num} раз(а).";

    ?>
</body>

</html>