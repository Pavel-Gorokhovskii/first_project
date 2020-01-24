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
    $arr = explode(':', file_get_contents('explode.txt'));
    $arr[2]++;
    echo "<pre>";
    print_r($arr);
    file_put_contents('explode.txt', implode(':', $arr));
    ?>
</body>

</html>