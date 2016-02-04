
<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<?php
				$db = new SQLite3('../logindb.sq3');
				$username =  $_POST["username"];
				$password = $_POST["password"];

				$sql = "INSERT INTO login(username, email, password) VALUES( '" . $username . "', '" . $email . "', '" . $password . "')";
				$result = $db-> query($sql);

				
				if($result) {
					echo "New record created successfully.";
				} else {
					echo "Error!";
				}

				unset($db);
			?>
			<?php require 'footer.php'; ?>
		</div>
	</div>
</body>