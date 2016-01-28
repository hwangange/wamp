
<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['msg'];

	mail("hwangangela99@hotmail.com", "Feedback Form Results",
		$msg, "From: $email");
	echo "<h1>Name: $name</h1>";

?>

