<?php
// the message
$msg = "Konichiwa";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("muhammadaliparvi@hotmail.com","My first php email",$msg,"From: dealpro@comsats.com");
?>