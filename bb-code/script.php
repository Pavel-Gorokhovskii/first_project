<?php
include('bbCodeFunction.php');
echo "<pre>" . bbCode(smile(censor(htmlspecialchars($_POST['text'])))) .  "</pre>";
