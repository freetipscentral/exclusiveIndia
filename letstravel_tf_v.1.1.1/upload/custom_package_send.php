<?php
  	
  	if(isset($_POST['submit'])) {
	  	$messagebody = 'Name : '.$_POST['customerName']."\n"
	  			."Email : ".$_POST['emailId']."\n"
	  			."Comment :".$_POST['requirements'];

	  	$emailto = 'nilendu.bhattacharya@gmail.com';
		$toname = 'Nilendu bhattacharya';
		$emailfrom = 'contactus@exclusiveindiatravel.com';
		$fromname = 'FROM NAME';
		$subject = 'Custom Package enquiry';

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
		mail($emailto, $subject, $messagebody, $headers, $params);		

	  	header('location: custom_package_thank_you.php');
	  	exit(0);
	 } else {
	 	header('location: contact_us_2.php');
	  	exit(0);
	 }
?>