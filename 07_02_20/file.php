<?php
// тип файла
header('Content-type: application/pdf');
// имя файла
header('Content-Disposition: attachment; filename = "The witcher.pdf"');
// файл
readfile('posledneye_zhelaniye.pdf');
