<?php

include 'autoload.php';

$file = new JsonFile('data.json');

$file->save(['a' => 1, 'b' => 2, '42' => 3, 4]);

print_r($file->load());

$file = new IniFile('data.ini');

$file->save(['a' => 1, 'b' => 2, '42' => 3, 4, 5]);


print_r($file->load());

$file = new PHPFile('data.php');

$file->save(['a' => 1, 'b' => 2, '42' => 3, 4, 5, 6]);


print_r($file->load());
