<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            color: red;
            font-size: 24px;
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <div><?php
            include('function.php');
            foreach (readXML('data.xml') as $value) {
                echo '' . smile($value["text"]) . '<br>' . $value["name"] . '<br>' . $value["date"] . '<br>';
            }
            ?>
    </div>
    <div class='form'>
        <form action='main.php' method="POST">
            <textarea cols="50" rows="25" name='text'></textarea>
            <input type="text" name='name'>
            <input type="submit" value='OK'>
        </form>
    </div>
</body>

</html>