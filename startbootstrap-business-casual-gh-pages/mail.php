<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
	if (isset($_POST['sent'])) {
		// $name = isset($_REQUEST['name']);
		// 	$email = isset($_REQUEST['email']);
		// 	$phone = isset($_REQUEST['phone']);
		// 	$comments = isset($_REQUEST['comments']);
		// 	$message = '
		// 	<html>
		// 		<head>
		// 			<title>Title Here</title>
		// 		</head>
		// 		<body>
		// 		<p>A new potential client filled out a form on your site!</p>
		// 		<p>Name: ' . $name . '</p>
		// 		<p>Email Address: ' . $email . '</p>
		// 		<p>Phone Number: ' . $phone . '</p>
		// 		<p>Comments: ' . $comments . '</p>
		// ';
		// 	$headers = "MIME-Version: 1.0" . "\r\n";
		// 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// 	$headers .= 'From: <noreply@KOPhotos.com>' . "\r\n";
		// 	$message = wordwrap($message, 70);
	
			// mail("johnsdavis95@gmail.com", "KO Photography", $message, $headers);
			if (mail("jdavis@launchthat.com", "KO Photography", "Email")) {
				echo 'Sent';
			} else {
				echo 'error';
			}
			// var_dump($_POST['name']);
		}

?>
