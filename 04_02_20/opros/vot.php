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
            flex-direction: column;
            font-size: 24px;
            border: 1px solid black;
            border-radius: 10px;
            justify-content: center;
            width: 500px;
            height: 250px;
            margin-left: 750px;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        h2 {
            justify-content: center;
            display: flex;
        }

        .kvadrat {
            height: 30px;
            background-color: red;
            margin-top: 30px;
            
        }
    </style>
</head>

<body>
    <?php
    include('config.php');
    $ind = $_POST['voting'];
    $arr = file($fileName);
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents($fileName, $arr);

    $sum = 0;
    $array = array(1, 2);
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    ?>
    <div class='otvet'>
        <h2><?= $arr[0] ?></h2>

        <?
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(' - ', $arr[$i]);
            $result = round($buf[1] / $sum * 100);
            echo "<div class = 'kvadrat' style = 'width: {$result}px;'></div> $buf[0] - $result%<br>";
        }
        ?>
    </div>
</body>

</html>