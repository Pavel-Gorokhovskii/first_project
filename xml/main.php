<?php
include('function.php');
saveXML(htmlspecialchars($_POST['text']), htmlspecialchars($_POST['name']), date('d.m.Y H:i:s'));
header('Location: index.php');
