<?php

include 'src/autoload.php';

use Point\Point;
//use Point\Line;
use Point\Square;

$startPoint = new Point();
$endPoint = new Point();

$startPoint
    ->setX(1)
    ->setY(2);

$endPoint
    ->setX(3)
    ->setY(5);

// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// $startPoint
//     ->setX(0)
//     ->setY(0);


// echo $line->getLength();

$square = new Square();

$square
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);

echo $square->getPerimeter();
