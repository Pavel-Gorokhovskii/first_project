<?php
include 'autoload.php';

//$tic = new Tictac(3);

$tic->putCross(0, 0);



//$tic->putNull(1, 0);

//$rand = new Random();

//$tic->putRandCross();
//$tic->putRandNull();

$area = new Area();

echo $area
    ->style('1px solid black', '100px', '100px')
    ->setMap($tic->map)
    ->html();
