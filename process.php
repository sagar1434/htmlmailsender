<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "sagarrokade9975@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	

		
	
	}




?>