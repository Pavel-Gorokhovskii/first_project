<?php
if (!empty($_FILES['upl']['tmp_name'])) {
    move_uploaded_file($_FILES['upl']['tmp_name'], "upload/" . $_FILES['upl']['name']);
}
header("Location: show.php");
