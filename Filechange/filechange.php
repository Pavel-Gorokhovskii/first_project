<pre>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tmp = $_FILES['upl']['tmp_name'];
    $name = $_FILES['upl']['name'];
    move_uploaded_file($tmp, 'upload/' . $name);
}
//Чтение файлов 
$dir = opendir('upload/');
while ($name = readdir($dir)) {
    if ($name == '.' or $name == '..')
        continue;
    if (is_dir($name))
        echo '<b>[' . $name . ']</b><br>';
    else
        print_r('<a href="upload/' . $name . '"download="">' . $name . '</a><br>');
}
closedir($dir);
//Чтение файлов 
$dir5 = opendir('upload/');
for ($dir5; $name1 = readdir($dir5); $dir5++) {
    if ($name1 == '.' or $name1 == '..')
        continue;
    print_r('<a href="upload/' . $name1 . '"download="">' . $name1 . '</a><br>');
}
?>