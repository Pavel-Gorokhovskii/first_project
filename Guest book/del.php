<?
include('connect.php');
$del = "DELETE FROM `guest_book` WHERE `guest_book`.`id` = $_GET[id]";
mysqli_query($link, $del);
header('Location: Guest_book.php');
