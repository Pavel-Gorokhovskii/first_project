<?php
rename('upload/' . $_POST['oldname'],  'upload/' . $_POST['name'] . '.' . $_POST['ext']);
header("Location: show.php");
