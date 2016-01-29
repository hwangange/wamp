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
				<h2>Welcome <?php echo $_POST["name"]; ?></h2>
				<p>Your email is: <?php echo $_POST["email"]; ?></p>
				<p>Your message is: <?php echo $_POST["message"]; ?></p>
				<p><?php $welcome = "Welcome!"; echo $welcome; ?></p>
				<p><a href = "index.php" data-direction = "reverse">Back</a></p>
			</div>

			<?php require 'footer.php';?>

	</body>
</html>
