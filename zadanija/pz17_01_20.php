<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin-top: 100px;
            font-size: 48px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }

        table {
            border: 1px solid black;

        }

        td {

            border: 1px solid black;
        }
    </style>

</head>

<body>
    <?php
    $arr = array(1 => 'Иванов', 2 => 'Петров', 3 => 'Зайцев', 4 => 'Федосов', 5 => 'Богатырев', 6 => 'Баграмян', 7 => 'Фрадкин', 8 => 'Короткевич', 9 => 'Селезнев', 10 => 'Сидоров');
    function table($arr)
    {
        $str = "<table>\n";
        foreach ($arr as $key => $value) {
            $str .= "\t<tr>\n\t\t<td>$key</td>\n\t\t<td>$value</td>\n\t</tr>\n";
        }
        $str .= "</table>";
        return $str;
    }
    echo table($arr);
    ?>
</body>

</html>