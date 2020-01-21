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
    $fp = fopen("counter.txt", "r+");
    $count = fgets("counter.txt");
    $fp = $count + 1;
    $fp = fwrite("counter.txt", 1);
    fclose($fp);
    print_r($fp);

    
    ?>
</body>

</html>