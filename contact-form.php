
<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['msg'];

	mail("hwangangela99@hotmail.com", "Feedback Form Results",
		$msg, "From: $email");
	header( "Location: http://bing.com"); 
	echo "Name: " + $name;

?>

