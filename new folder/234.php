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
    $fp = fopen("file.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);
    if (is_file('file.txt')) {
        echo "TRUE";
    } else {
        echo "FALSE";
    }
    echo "<br>";
    if (is_dir("C:\\open_server_5_2_9_ultimate\\OSPanel\\domains\\Pavel-Gorokhovskii\\first_project\\new folder")) {
        echo "TRUE";
    } else {
        echo "FALSE";
    }
    echo "<br>";
    unlink("file.txt");
    echo "<br>";
    //rmdir("delet") - удаляет существующий каталог;
    echo "<br>";
    $fp = fopen("file3.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);
    copy("file3.txt", "file4.txt");
    echo "<br>";
    $fp = fopen("file6.txt", "w+");
    fwrite($fp, "Test. Этот файл создан для массива.");
    fclose($fp);
    file("file6.txt");
    $f = file("file6.txt");
    print_r($f);
    echo "<br>";
    readfile("file6.txt");
    $fp = fopen("counter.txt", "w+");
    fwrite($fp, "0");
    fclose($fp);
    ?>

</body>

</html>