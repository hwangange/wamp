
<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<?php
				$db = new SQLite3('../mydb.sq3');
				$sql = "SELECT * FROM items WHERE price < 3.00";
				$result = $db->query($sql);
				while($row = $result->fetchArray(SQLITE3_ASSOC)) {
					echo $row['name'] . ': $' . $row['price'] . '<br/>';
				}
				unset($db);
			?>
			<br><br>
			<form action = "user.php" method = "post">
				<fieldset>
					Email: <input type = "text" id = "email" name = "email" />
					Username: <input type = "text" id = "username" name = "username" />
					Password: <input type = "text" id = "password" name = "password" />
					<button type = "submit" id = "registerBtn" style = "width: 50%; margin: auto">Register</button>
				</fieldset>
			</form>

			<?php require 'footer.php'; ?>
		</div>
	</div>
</body>