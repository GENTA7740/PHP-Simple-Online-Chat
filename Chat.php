<?php
$username= $_POST['Username'];
$message=  $_POST['Message'];
$timestamp = date('h:i:s');
$feed = 'Chat.txt';
$fb = fopen($feed, 'a+');
fwrite($fb, '['.$timestamp.'] ['.$username.'] : '.$message."\n\n");
fclose($fb);
?>
