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
    $makefoo = true;
    /*Мы не можем вызывать функцию foo () в этом месте, поскольку она еще не определена, но мы можем обратиться к bar () */
    bar();
    if ($makefoo) {
        function foo()
        {
            echo "I don't exist until program execution reaches me. \n";
        }
    }
    /* Теперь мы благополучно можем вызывать foo(), поскольку $makefoo была интерпретирована как true */
    if ($makefoo) foo();
    function bar()
    {
        echo "I exist immediately upon program start. \n";
    }
    echo "<br>";
function takes_array ($input)
{
    echo "$input[0] + $input[1] = ",
    $input[0]+$input[1];
}
    ?>

</body>

</html>