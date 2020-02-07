<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='rectangle.css' rel='stylesheet'>

</head>

<body>
    <div class="rectangle" style="width: <?= $_GET['a'] ?>; height: <?= $_GET['b'] ?>; background-color: <?= $_GET['background-color'] ?>"></div>
    <?php
    print_r($_GET);

    ?>
</body>

</html>