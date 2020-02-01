<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .otvet {
            display: flex;
            flex-direction: column-reverse;

            font-size: 24px;
            border: 1px solid black;
            border-radius: 10px;
            justify-content: center;
            width: 250px;
            height: 250px;
            margin-left: 750px;

        }

        h2 {
            justify-content: center;
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    $ind = $_POST['voting'];
    $arr = file('votting.txt');
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents('votting.txt', $arr);

    $sum = 0;
    $array = array(1, 2);
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }



    ?>
    <h2><?= $arr[0] ?></h2>
    <div class='otvet'>
        <?
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(' - ', $arr[$i]);

            echo   $buf[0] . " - " . round($buf[1] / $sum * 100) . "%";
            echo "  <div style = 'height: 30px;
            width:" . (100 * $buf[1] / $sum) . "px; background-color: red; display: flex; flex-direction: column; margin: 5px;'></div> ";
        }

        ?>

    </div>
</body>

</html>