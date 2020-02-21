<?php
rmdir('upload/' . $_GET['file']);
header("Location: show.php");
