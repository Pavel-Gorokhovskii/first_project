<?php
include('autoload.php');

$student = new Student("Peter", "Ivanov");
echo $student->introduce();
echo "<br>";
$teacher = new Teacher("Aleksandr", "Pushkin");
echo $teacher->introduce();
echo "<br>";
$engineer = new Engineer("Vitaly", "Sidorov");

echo $engineer->introduce() . $engineer->work();
