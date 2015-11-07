<?php 
require 'gmail.php';
$to = 'hoangtuanbka93@gmail.com';
$name = 'hoang van tuan';
$subject = 'active account';
$body = 'click here to active account';
$check = sendmail($to,$name,$subject,$body);

if(!$check)
	echo 'gửi thành công';
else
	echo $check;

 ?>