<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 24px;
            font-weight: bolder;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>
    <form action="vot.php" method="POST">
        <?php
        $arr = file('votting.txt');
        ?>
        <h2><?= $arr[0] ?></h2>
        <?php
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(" - ", $arr[$i])[0];
            echo "<label><input type='radio' name='voting' value='$i'>$buf</label><br> \n";
        }

        ?>
        <input type="submit" value="OK">
    </form>
</body>

</html>