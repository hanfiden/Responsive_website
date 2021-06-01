<? php

if(isset($_POST['submit'])) {
	g$mailFrom = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];

	$mailTo = "fidenhan@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.html?mailsent");
}