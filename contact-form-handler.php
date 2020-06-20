<?php
	$name= $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_form = 'niteshtutorial@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
					"User_email: $visitor_email.\n";
					"User Message:$message.\n";


	$to = "ns98738698@gmail.com";
	$headers = "form: $email_form\r\n";
	$headers ="Reply-to : $visitor_email\r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("location: contact.html")
