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

    function foo()
    {
        function bar()
        {
            echo "I don't exist until foo () is called. \n";
        }
    }
    /* Мы пока не можем обратиться к bar (), поскольку она еще не определена. */
    foo();
    /* Теперь мы можем вызвать функцию bar(), обработка foo() сделала ее доступной. */
    bar();
    ?>

</body>

</html>