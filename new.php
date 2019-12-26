<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 24pt;
            font-weight: bolder;
            text-align: center;
            font-family: cursive;
        }
    </style>
</head>

<body>
    <?php
    $a = 3;
    echo "\$a=$a";
    echo "<br>";
    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"]; // bar
    echo "<br>";
    echo $arr[12]; // 1
    echo "<br>";
    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));
    echo $arr["somearray"][6]; // 5
    echo "<br>";
    echo $arr["somearray"][13]; // 9
    echo "<br>";
    echo $arr["somearray"]["a"]; // 42
    echo "<br>";
    // Этот массив эквивалентен ...
    array(5 => 43, 32, 56, "b" => 12);
    echo "<br>";
    // ... этому массиву
    echo "<pre>";
    $att = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    print_r($att);
    echo "</pre>";
    echo "<br>";
    $ara = array(5 => 1, 12 => 2);
    print_r($ara);
    echo "<br>";
    $ara[] = 56; // В этом месте скрипта это эквивалентно $arr[13] = 56;
    print_r($ara);
    echo "<br>";
    $ara["x"] = 42; //Это добавляет к массиву новый элемент с ключом "x"
    print_r($ara);
    echo "<br>";
    unset($ara[5]); // Это удаляет элемент из массива
    print_r($ara);
    echo "<br>";
    unset($ara); // Это удаляет массив полностью
    print_r($ara);
    echo "<br>";
    class foo
    {
        function do_foo()
        {
            echo "Doing foo. ";
        }
    }
    $bar = new foo;
    $bar->do_foo();
    echo "<br>";
    // Управляющие конструкции
    // if (выражение) инструкция
    $a = 2;
    $b = 1;
    if ($a > $b)
        echo "a больше чем b";
    echo "<br>";
    if ($a > $b) {
        echo "a больше, чем b";
        $b = $a;
    }
    echo "<br>";
    // else
    $a = 1;
    $b = 2;
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo "a is NOT greater then b";
    }
    echo "<br>";
    // elseif/else if
    $a = 1;
    $b = 2;
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo "a is equal to b";
    } else {
        echo "a is smaller than b";
    }
    echo "<br>";
    // Альтернативный синтаксис
    if ($a == 5) :
        echo "a equals 5";
        echo "...";
    elseif ($a == 6) :
        echo "a equals 6";
        echo "!!!";
    else :
        echo "a is neither 5 nor 6";
    endif;
    ?>
</body>

</html>