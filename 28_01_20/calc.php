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
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    switch ($_POST['s']) {
        case 2:
            $c = $a - $b;
            break;
        case 3:
            $c = $a * $b;
            break;
        case 4:
            $c = $a / $b;
            break;
        case 1:
        default:
            $c = $a + $b;
            break;
    }
    echo "$c";
    $fp = fopen('calc.txt', 'a+');
    fwrite($fp, "$c" . "\r\n");
    fclose($fp);
    ?>
</body>

</html>