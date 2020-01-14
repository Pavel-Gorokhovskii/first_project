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

    function takes_array($input)
    {
        echo '$input[0] + $input[1] = ',
            $input[0] + $input[1];
    }
    takes_array(array(8, 6));
    
    
    
    ?>

</body>

</html>