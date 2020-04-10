<?php
session_start();
if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = date("H:i:s");
}
echo "" . time() - $_SESSION['time'] . " секунд назад вы посещали эту страницу<br>";
