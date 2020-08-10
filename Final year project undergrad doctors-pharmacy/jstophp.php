<?php 

$text = $_POST['posttext'];

$my_file = 'speechToText.txt';
 $handle = fopen($my_file, 'w');
 fwrite($handle, $text);
 //echo $data;
 fclose($handle);



 ?>