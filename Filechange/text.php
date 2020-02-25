<?php
file_put_contents('upload/' . $_POST['fileName'], $_POST['text']);
header("Location: show.php");
