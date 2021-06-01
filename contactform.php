<?php

if(isset($_POST['submit'])) {
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$message = $_POST['message'];

	$mailTo = 'fidenhan@gmail.com';
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n".$message.".\n"."Sender's email: ".$mailFrom;

	if(mail($mailTo, $subject, $txt, $headers)) {
		header('Location: index.html?Message_sent!');
	} else {
		header('Location: index.html?Failed_to_send!');
	};
}

?>