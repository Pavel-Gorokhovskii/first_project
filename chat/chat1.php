<html>
<head><meta name="pragma" content="no-cache"><?php include "style.html"; ?></head>
<body>
<TABLE width="100%" border=0 cellspacing=0 cellpadding=0><tr><td align="left"><TABLE width="100%" border=0 cellspacing=0 cellpadding=0><tr align="left"><td valign="top"><table width="100%" border="0"><TR><form action="chat1.php" method="post"><TD align="left" class="d2"><b>Имя:<BR><input class=sb type="text" name="person" maxlength="80" value="<? echo $person; ?>" style="width:120px" /><br>Сообщение:</b><BR> <input class=sb name="message" type="text" maxlength="128" style="width:120px" /><tr><td class="d2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class=sb2 type="submit" value="Добавить"></TD></form></TR>
<?
  include "option.php";
  $fl = file($msg_file);
  $count_fl = count($fl);
  $msg = stripslashes(trim($_POST['message']));
  $person = trim($_POST['person']);
  if (($msg != "") && ($person != ""))
  {
    if ($count_fl >= $msg_count)
    {
      $fw = fopen($msg_file, "w");
      for($i=1;$i<$msg_count;$i++)	fwrite($fw, trim($fl[$i])."\r\n");
    }
    $time = Date("h:i");
    $fp = fopen($msg_file, "a+");
    $fw = fwrite($fp, "<span class=d2><b style=\"color:#FFF000\">&nbsp;".$person." :</b>&nbsp;<I style=\"color:#FF0000\">".$time."</I><br>".$msg."<hr size=-2 color=\"#99CCFF\"></span>\r\n");
    fclose($fp); ?>
    <script>window.parent.bottom.document.location.reload();</script>
<?php 
  } 
?>
</td></tr></TABLE></td></tr></TABLE></body></html>