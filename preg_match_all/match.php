<?php
$doc = file_get_contents($_POST['site']);
$word = $_POST['word'];
echo "слово $word употребляется на странице  " . preg_match_all('/' . $word . '/iu', $doc) . " раз(а)";
