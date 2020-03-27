<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel="stylesheet">

</head>

<body>
    <div class='tab'>
        <?php

        include('connect.php');

        $query = "SELECT * FROM Guest_book";

        $result = mysqli_query($link, $query)
            or die("Не удалось выполнить запрос");

        echo "<table class = 'tables'>\n";
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo "<tr>";
            echo "<td> <a href = 'del.php?id=$row[0]'>" . $row[0] . "</a></td>";
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
        <form action="add.php" method="post">
            <textarea name="text" cols="30" rows="10"></textarea><br>
            <input type="text" name="name"><br>
            <input type="submit" value="OK">
        </form>
    </div>

</body>

</html>