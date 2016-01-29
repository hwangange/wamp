<?php

	ini_set('display_errors',1);  
	error_reporting(E_ALL);

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['msg'];

	mail('hwangangela99@hotmail.com', 'Feedback Form Results',
		$msg, 'From: $email');
	echo '<h1>Name: $name</h1>';

?>
<html>
	<body>
		<h1>Contact form</h1>
	</body>
</html>

