<?php
include 'autoload.php';

$tic = new Tictac(3);

$tic->putCross(2, 2);

$tic->putRand(2);

// $tic->putNull(1, 1);

$table = new Table();

echo $table
    ->style('1px solid black', '100px', '100px')
    ->data($tic->map)
    ->html();
