<?php
$url = $_GET['url'];
$headers = (get_headers($url, 1));
header('Content-Type: ' . $headers['Content-Type']);
echo file_get_contents($url);
