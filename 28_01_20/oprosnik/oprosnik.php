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
    $a = $_POST['Text'];
    $b = $_POST['userName'];
    echo "$a";
    echo "<br>";
    echo "$b";
    $fp = fopen('data.csv', 'a+');
    fwrite($fp, "$a ; $b" . "\n");
    fclose($fp);
    ?>
</body>

</html>