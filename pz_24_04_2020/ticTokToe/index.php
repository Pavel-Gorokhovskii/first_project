<?php
include "autoload.php";

$tic = new Tictac(3);
// print_r($tic->map);
$tic->putCross(1, 2);
$tic->putNull(2, 2);
// print_r($tic->map);

$table = new Table();

echo $table
    ->style('border: 1px solid black')
    ->data($tic->map)
    ->html();
