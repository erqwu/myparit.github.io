<?php
   $filename = 'move.txt';
   $fp= fopen($filename, "w");
   $len = fwrite($fp, $_POST["text"]);
   fclose($fp);
   echo '<script>window.open("index.html","_self");</script>';
?>