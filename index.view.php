
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#1CCC5B" />
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
	<title>Contact form</title>
</head>
<body>
	<header>
		<img src="./assets/img/logo.png" alt="CamiloG logo">
		<h1>Send your message <i class="bi bi-envelope-fill"></i></h1>
	</header>
	<main>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="contact" method="POST">
			<input type="text" class="contact__input" name="name" placeholder="Your name" value="<?php if(!$sent && isset($name)) echo $name ?>">
			<input type="email" class="contact__input" name="email" placeholder="Your email" value="<?php if(!$sent && isset($email)) echo $email ?>">
			<textarea name="message" class="contact__textarea" placeholder="Your message"><?php if(!$sent && isset($message)) echo $message ?></textarea>
			<button name="submit" class="contact__btn">
				Submit
				<i class="bi bi-send-fill"></i>
			</button>
		</form>
		<?php
		if(!empty($errores)) echo "<div class='message error'>$errores</div>";
		if(empty($errores) && $sent) echo '<div class="message success">The message has been sent</div>';
		?>
	</main>
	<script src="./js/app.js"></script>
</body>
</html>
