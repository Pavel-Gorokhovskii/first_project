<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="?action=newgame">новая игра</a>
    <?php
    include 'autoload.php';


    $ai = new Ai(3);

    //$ai->setSaver(new JsonFile('map.json'));
    //$ai->setSaver(new PHPFile('map.php'));
    $ai->setSaver(new SessionSaver('map'));

    $ai->loadMap();


    switch ($_GET['action']) {
        case 'shot':
            if (!empty($ai->searchEmptyCells()) && $ai->checWin() === null) {
                $ai->putCross($_GET['i'], $_GET['j']);
            }

            $ai->putRandNull();
            break;
        case 'newgame':
            $ai->initMap(3);
            break;
    }

    $ai->saveMap();

    if (empty($ai->searchEmptyCells()) || $ai->checWin() !== null) {
        if ($ai->checWin() === 1) {
            echo "Выйграли крестики!";
        } elseif ($ai->checWin() === 0) {
            echo "Выйграли нолики!";
        } else {
            echo "Ничья!";
        }
    }

    $area = new Area();

    $area->setMap($ai->getMap());

    echo $area->html();

    ?>
</body>

</html>