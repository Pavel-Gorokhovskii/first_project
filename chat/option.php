<?php
 $msg_file = "mesage.db"; // Файл куда будут записываться записи
 $msg_count = 10; // Количество записей выводимых в чате последние удаляются.
 if (!file_exists($msg_file)) { $fo = fopen($msg_file, "w"); fclose($fo); }
?>