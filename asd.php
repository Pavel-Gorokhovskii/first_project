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

$arr = [1, 15, 18, 27, 29, 5, 68, 357, 25, 88, 45];
$max = 0;

foreach($arr as $v)
{
    if($v > $max)
        $max = $v;
}

echo $max; 
?>
</body>
</html>