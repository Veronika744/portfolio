<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo="wanderew71@gmail.com"
	$headers="From ".$mailFrom;
	$txt="You have received e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $txt,$message, $headers);
	header("Location: index.pxp?mailsend");
}

?>