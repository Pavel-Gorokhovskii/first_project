<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tictac td {
            border: 1px solid black;
            width: 100px;
            height: 100px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    include 'autoload.php';

    $ai = new Ai();

    $ai
        ->initMap(3)
        ->putRandCross()
        ->putRandNull()
        ->putRandCross()
        ->putRandNull()
        ->putRandCross()
        ->putRandNull()
        ->putRandCross()
        ->putRandNull()
        ->putRandCross()
        ->getMap();

    $area = new Area();

    $area->setMap($ai->getMap());

    echo $area->html();
    ?>
</body>

</html>