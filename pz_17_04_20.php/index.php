<?php

declare(strict_types=1);

include 'autoload.php';

$a = new A();

echo $a->clear()
    ->href('https://www.tut.by')
    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();
echo "<br>";
$h = new H(2);
echo $h

    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:green')
    ->HTML();
echo "<br>";
$table = new Table();
echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->HTML();
