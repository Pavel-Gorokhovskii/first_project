<html>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="6; URL='chat2.php';"><meta name="pragma" content="no-cache">
<?php include "style.html"; ?>
</head>
<body>
<?
  include "option.php";
  $fmsg = file($msg_file);
  $count_msg = count($fmsg);
  for($i = $count_msg; $i >= 0 ;$i--) echo $fmsg[$i];
?>
</html>