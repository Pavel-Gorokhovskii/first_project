<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            justify-content: center;
            display: flex;
            flex-direction: column;
        }

        .forma {
            display: flex;
            flex-direction: column;
            background-color: grey;
            font-size: 24px;
            border: 1px solid black;
            border-radius: 10px;
            justify-content: center;
            width: 250px;
            height: 500px;
            margin-left: 750px;
            margin-top: 100px;
        }

        h2 {
            justify-content: center;
            display: flex;
        }

        label {
            justify-content: center;
            display: flex;
            background-color: white;
        }

        .ok {
            justify-content: center;
            display: flex;
            width: 200px;
            height: 25px;
        }
    </style>
</head>

<body>
    <div class='forma'>
        <form action="vot.php" method="POST">
            <?php
            include('config.php');
            $arr = file($fileName);
            ?>
            <h2><?= $arr[0] ?></h2>
            <?php
            for ($i = 1; $i < count($arr); $i++) {
                $buf = explode(" - ", $arr[$i])[0];
                echo "<label><input type='radio' name='voting' value='$i'>$buf</label><br> \n";
            }

            ?>
            <div class='ok'>
                <input type="submit" value="OK">
            </div>
        </form>
    </div>
</body>

</html>