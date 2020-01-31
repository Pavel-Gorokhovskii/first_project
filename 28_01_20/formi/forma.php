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
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $i = $_POST['voting'];
    $arr = explode(';', file_get_contents('forma.txt'));
    $arr[$i]++;
    file_put_contents('forma.txt', implode(';',$arr));
    
    foreach ($arr as $key => $value) {
        echo "$key - $value<br>";
    }

    ?>
</body>

</html>