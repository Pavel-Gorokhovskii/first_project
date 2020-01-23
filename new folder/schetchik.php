<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
    echo "Вы обновили эту страницу " . $_SESSION['counter']++ . " раз. ";
    echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">обновить";
    ?>
</body>

</html>