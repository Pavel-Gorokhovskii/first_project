<?php

include 'autoload.php';

$file = new JsonFile('data.json');

$file->save(['a' => 1, 'b' => 2, 'c' => 3]);
print_r($file->load());

$file = new IniFile('data.ini');

$file->save(['a' => 3, 'b' => 4, 'c' => 5]);

print_r($file->load());

$file = new PHPFile('data.php');

$file->save(['a' => 6, 'b' => 7, 'c' => 8]);

print_r($file->load());
