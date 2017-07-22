<?php
$emailto = 'nilendu.bhattacharya@gmail.com';
$toname = 'Nilendu bhattacharya';
$emailfrom = 'contactus@exclusiveindiatravel.com';
$fromname = 'FROM NAME';
$subject = 'Email Subject';
$messagebody = 'Hello.';
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
$test = mail($emailto, $subject, $messagebody, $headers, $params);
// $test should be TRUE if the mail function is called correctly
?>