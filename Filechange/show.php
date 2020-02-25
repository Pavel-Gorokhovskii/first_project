<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
                echo "<a href='upload/$name'><img src = '$icon'> $name </a>
            $f  Mb  <a href='del.php?file=$name'><img src = 'notification-error_114458.png'></a>
            <a href='rename_form.php?file=$name'><img src = 'compose_icon_128484.png'></a>
            <a href='edit.php?file=$name'><img src = 'icons8-sublime-text-48.png'></a>
            <a href='listen.php?file=$name'><img src = 'icons8-48.png'></a><br>";
            } else {
                echo "<a href='upload/$name'><img src = 'season-7_115467.png'> $name</a>
            $f  Mb <a href='deldir.php?file=$name'><img src = 'notification-error_114458.png'></a>
            <a href='rename_form.php?file= $name'><img src = 'compose_icon_128484.png'><br>";
            }
        }
    }
    closedir($dir);
    ?>
    <a href='filechange.html'><img src='11946middlefinger_111428.png'></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>