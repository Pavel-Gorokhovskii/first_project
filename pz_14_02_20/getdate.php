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
            justify-content: center;
        }
    </style>

</head>

<body>
    <?php
    $today = getdate();
    echo $today['month'];
    echo '<br>';
    echo $today['wday'];
    echo '<br>';
    echo $today['weekday'];

    $rusWeekday = [
        'Monday' => 'Понедельник',
        'Tuesday' => 'Вторник',
        'Wednesday' => 'Среда',
        'Thursday' => 'Четверг',
        'Friday' => 'Пятница',
        'Saturday' => 'Суббота',
        'Sunday' => 'Воскресенье'
    ];
    echo '<br>';
    echo $rusWeekday[$today['weekday']];
    echo '<br>';
    echo $rusWeekday[getdate()['weekday']];
    echo '<br>';
    $rusMonth = [
        'January' => 'Январь',
        'February' => 'Февраль',
        'March' => 'Март',
        'April' => 'Апрель',
        'May' => 'Май',
        'June' => 'Июнь',
        'July' => 'Июль',
        'August' => 'Август',
        'September' => 'Сентябрь',
        'October' => 'Октябрь',
        'November' => 'Ноябрь',
        'December' => 'Декабрь',
    ];
    echo $rusMonth[getdate()['month']];
    echo '<br>';
    $rusWday = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье'
    ];
    echo $rusWday[getdate()['wday']];
    echo '<br>';

    //date

    echo date('F j, Y, g:i a') . '<br>';
    echo date('m.d.y') . '<br>';
    echo date('j, n, Y') . '<br>';
    echo date('Ymd') . '<br>';
    echo date('h-i-s, j-m-y, it is w Day z') . '<br>';
    echo date('\i\t \i\s \t\h\e jS \d\a\y') . '<br>';
    echo date('D M j G:i:s T Y') . '<br>';
    echo date('H:m:s \m \i\s\ \m\o\n\t\h') . '<br>';
    echo date('H:i:s') . '<br>';

    // mktime

    echo date('M-d-Y', mktime(0, 0, 0, 12, 20, 2007)) . '<br>';
    echo date('M-d-Y', mktime(0, 0, 0, 12, 32, 2007)) . '<br>';
    echo date('M-d-Y', mktime(0, 0, 0, 13, 1, 2007)) . '<br>';
    echo date('M-d-Y', mktime(0, 0, 0, 1, 1, 2007)) . '<br>';
    echo date('M-d-Y', mktime(0, 0, 0, 1, 1, 07)) . '<br>';


    ?>
</body>

</html>