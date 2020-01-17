<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 48px;
            font-weight: bolder;
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <?php
    function plus(&$string)
    {
        $string .= ' + Петя';
    }
    $str = 'Ира';
    plus($str);
    echo $str; // Выведет 'Ира + Петя'
    echo "<br>";
    // Значение по умолчанию
    function makecoffee($type = "cappucino")
    {
        return "Making a cup of $type. \n";
    }
    echo makecoffee();
    echo "<br>";
    echo makecoffee("espresso");
    echo "<br>";
    echo makecoffee("late");
    echo "<br>";
    // Область видимости переменной
    $a = 1; // Глобальная область видимости
    function Test()
    {
        echo $a; // ссылка на переменную локальной видимости
    }
    Test();
    $a = 1;
    $b = 2;
    function Sum()
    {
        global $a, $b;
        $b = $a + $b;
    }
    Sum();
    echo $b;
    echo "<br>";
    // Статические переменные
    function Test1()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    echo Test1();
    echo "<br>";
    echo Test1();
    echo "<br>";
    echo Test1();
    echo "<br>";
    echo Test1();
    echo "<br>";
    echo Test1();
    echo "<br>";
    echo Test1();
    echo "<br>";

    ?>
</body>

</html>