
<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['msg'];

	if(!isset($_REQUEST['email'])) {
		?>

		<html>
			<head><title>Feedback Form</title></head>
			<body>
				<h1>Feedback Form</h1>
				<p>
					<form method = "post" action = "contact-form.php">
						Name: <input type = "text" name = "name">
						<br />
						Email: <input type = "text" name = "email">
						<br />
						Message: <br />
						<textarea name = "msg" rows = "15" cols = "40"></textarea><br />
						<input type = "submit" />
					</form>
				</p>
			</body>
		</html>
	}

	<?php

	mail("hwangangela99@hotmail.com", "Feedback Form Results",
		$msg, "From: $email");
	header( "Location: http://bing.com"); 

	$name = $_REQUEST['name'];
	echo "Name: " + $name;

?>

