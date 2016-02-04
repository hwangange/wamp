
<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<form action = "login_success.php" method = "post">
				<fieldset>
					Username: <input type = "text" id = "username" name = "username" />
					Password: <input type = "text" id = "password" name = "password" />
					<button type = "submit" id = "loginBtn" style = "width: 50%; margin: auto">Login</button>
				</fieldset>
			</form>

			<?php require 'footer.php'; ?>
		</div>
	</div>
</body>