<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel = "stylesheet" type = "text/css" href = "css/m.css" />
        <title>Hello World</title>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    
    <body class = "ui-mobile-viewport">

		<div data-role = "page" id = "ask" data-theme = "a">
			<?php require 'header.php';?>

			<div data-role = "content">
				<h2>Ask</h2>
				<p><strong>Email: </strong>123@email.com</p>
				<p><strong>Phone: </strong>123-4567</p>

				<form method="post" action = "sendmail.php">
				  Name: <input name = "name" type = "text" /> 
				  Email: <input name="email" type="text" />
				  Message:<br />
				  <textarea name="message" rows="25" cols="40">
				  </textarea><br />
				  <button type="submit">Submit</button>
				</form>

				<p><a href = "index.php" data-direction = "reverse">Back</a></p>
			</div>

			<?php require 'footer.php';?>
		</div>

    </body>
</html>

