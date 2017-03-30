<?php

	/* Simple order form script 
		Uses $_POST variables: email, name, date, suggestions
	**/

	$email = htmlspecialchars($_POST['email']);
	$name = htmlspecialchars($_POST['name']);
	$date = date('d.m.Y.');
	$suggestions = htmlspecialchars($_POST['suggestions']);

	/* You can edit the templates below to customize reservation emails. Remember to change $mail_address to your email address. */
	$mail_subject = "New web contact from MYS OFFER web";
	$mail_content = "Contact from MYS OFFER!\r\n \r\nName: ".$name."\r\nDate: ".$date."\r\nEmail: ".$email."\r\nQuestion: ".$suggestions."\r\n";
	$mail_address = "info@mysyachting.com";   /*  Your email **/

	$mail_content = wordwrap($mail_content, 70, "\r\n");
	$headers = 'From: info@mysyachting.com'. "\r\n" .'X-Mailer: PHP/'.phpversion();
	
	mail($mail_address, $mail_subject, $mail_content, $headers);

	header('Location: /thank-you.html');
?>
