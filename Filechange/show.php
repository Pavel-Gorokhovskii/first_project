<?php
$dir = opendir('upload/');
while ($name = readdir($dir)) {
    if ($name != '.' && $name != '..') {
        if (!is_dir("upload/$name")) {
            switch (explode('.', $name)[1]) {
                case 'docx':
                    $icon = 'season-2_115465.png';
                    break;
                case 'pdf':
                    $icon = 'season-6_115464.png';
                    break;
                default:
                    $icon = 'season-3_115470.png';
                    break;
            }
            $f = round((filesize("upload/$name") / 1024) / 1024, 3);
            echo "<a href='upload/$name'><img src = '$icon'> $name </a> $f  Mb  <a href='del.php?file=$name'><img src = 'notification-error_114458.png'></a>
            <form action='rename.php' method='POST'><input type='text' value=" . $name . " > <input class='submit' type='submit' value='rename'></form><br>";
        } else {
            echo "<a href='upload/$name'><img src = 'season-7_115467.png'> $name </a> $f  Mb <a href='deldir.php?file=$name'><img src = 'notification-error_114458.png'></a> <a href='rename.php?file=$name'><img src = 'compose_icon_128484.png'></a><br>";
        }
    }
}
closedir($dir);
?>
<a href='filechange.html'><img src='11946middlefinger_111428.png'></a>