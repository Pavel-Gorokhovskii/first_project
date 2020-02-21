<?php
unlink('upload/' . $_GET['file']);
header("Location: show.php");
