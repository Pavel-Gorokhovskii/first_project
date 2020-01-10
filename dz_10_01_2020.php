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
    $s = 100; // рублей мы имеем
$k = 12; // % годовых
for ($S = 1; $i <= 10; $i++) {
    $S = $S + $i;
}
echo $S;
