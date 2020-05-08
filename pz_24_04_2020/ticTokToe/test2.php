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

    $ai = new Ai(3);

    $ai->selfGaming();
    if ($ai->checWin() === 1) {
        echo 'Выиграли крестики';
    } elseif ($ai->checWin() === 0) {
        echo 'Выиграли нолики';
    } else {
        echo 'Ничья';
    }

    $area = new Area();

    $area->setMap($ai->getMap());

    echo $area->html();
    ?>
</body>

</html>