<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tab {
            display: flex;
            justify-content: center;
            font-weight: bolder;
            font-size: 24px;
            margin: 10px;

        }

        .tables {
            border: solid 2px black;
        }

        .tables td {
            border: solid 2px black;
        }

        .form {
            display: flex;
            justify-content: center;
            font-weight: bolder;
            font-size: 24px;
            margin: 20px;
        }

        textarea {
            width: 500px;
            height: 330px;
        }
    </style>
</head>

<body>
    <div class='tab'>
        <?php
        $link = mysqli_connect("localhost", "root", "")
            or die("Не удалось соединиться с сервером");

        mysqli_select_db($link, "Guest_book")
            or die("Не удалось выбрать БД");

        if (!empty($_POST['text']) && !empty($_POST['name'])) {
            $sql = "INSERT INTO Guest_book VALUES (NULL, '$_POST[text]', '$_POST[name]')";
            mysqli_query($link, $sql);
        }
        $query = "SELECT * FROM Guest_book";

        $result = mysqli_query($link, $query)
            or die("Не удалось выполнить запрос");

        echo "<table class = 'tables'>\n";
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo "<tr>";
            // echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
        }
        echo "</table>\n";

        mysqli_free_result($result);

        mysqli_close($link);
        ?>
    </div>
    <div class='form'>
        <form action="" method="post">
            <textarea name="text" cols="30" rows="10"></textarea><br>
            <input type="text" name="name"><br>
            <input type="submit" value="OK">
        </form>
    </div>

</body>

</html>