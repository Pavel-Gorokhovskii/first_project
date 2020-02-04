<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <?php
    $mes_arr = file("text.txt");
    foreach ($mes_arr as $key => $value) {


        echo "<div class = '" . (($key % 2) ? 'odd' : 'even') . "'> $value </div>";
    }
    ?>
</body>

</html>