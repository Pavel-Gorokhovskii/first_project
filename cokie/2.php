<?php
if (isset($_COOKIE['count'])) {
    setcookie('count', $_COOKIE['count'] + 1);
    echo $_COOKIE['count'] . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Обновить</a>
</body>

</html>