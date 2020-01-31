<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 30px;
            font-weight: bolder;
            display: block;
            
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    $ind = $_POST['voting'];
    $arr = file('votting.txt');
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents('votting.txt', $arr);
    // foreach ($arr as $value){
    //     echo"$value<br>";
    // }
    $sum = 0;
    $array = array(1,2);
    for($i = 1; $i < count($arr); $i++){
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    
      

    ?>
    <h1><?=$arr[0]?></h1>
    <?
for($i = 1; $i < count($arr); $i++){
    $buf = explode(' - ', $arr[$i]);
    echo $buf[0]. " - ". round($buf[1] / $sum * 100). "%";
    echo "  <img src='pixel.png' width='".(100 * $buf[1] / $sum)."' height='30'><br>";

}
    ?>
</body>

</html>