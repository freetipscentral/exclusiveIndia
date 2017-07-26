<?php
  if(isset($_POST['submit'])) {
  	echo "submit pressed!";
  } else {
  	header('location: contact_us_2.php');
  	exit(0);
  }
?>