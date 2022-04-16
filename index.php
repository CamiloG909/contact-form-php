<?php

$errores = '';
$sent = '';

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(!empty($name)) {
		$name = trim($name);
		$name = filter_var($name, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Please enter your name<br />';
	}

	if(!empty($email)) {
		$email = trim($email);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Please enter a valid email<br />';
		}
	} else {
		$errores .= 'Please enter your email<br />';
	}

	if(!empty($message)) {
		$message = htmlspecialchars($message);
		$message = trim($message);
		$message = stripslashes($message);
	} else {
		$errores .= 'Please enter your message<br />';
	}

	if(!$errores) {
		// $send_to = 'cgalindorivera@gmail.com';
		// $issue = 'Contact form with PHP';
		// $ready_message = "De: $name \nEmail: $email \n\n$message";

		// mail($send_to, $issue, $ready_message);
		$sent = true;
	}
}

require './index.view.php';

?>
