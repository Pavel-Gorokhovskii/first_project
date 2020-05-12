<?php
session_start();
?>

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

        a {
            display: block;
            width: 100%;
            height: 100%;
        }

        img {
            display: block;
            position: relative;
            top: 25px;
            left: 25px;
        }
    </style>
</head>

<body>
    <?php
    include 'autoload.php';


    $ai = new Ai();

    $ai->initMap(3)
        ->putCross(1, 1);

    // $area = new Area();

    // $area->setMap($ai->getMap());

    // echo $area->html();

    // $ai->selfGaming();
    // if ($ai->checWin() === 1) {
    //     echo "Выйграли крестики!";
    // } elseif ($ai->checWin() === 0) {
    //     echo "Выйграли нолики!";
    // } else {
    //     echo "Ничья!";
    // }

    $area = new Area();

    $area->setMap($ai->getMap());

    echo $area->html();


    ?>
</body>

</html>