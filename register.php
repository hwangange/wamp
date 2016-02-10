
<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<?php
				$db = new SQLite3('../logindb.sq3');
				if(isset($_POST['submit'])) {
					if(!$_POST['username'] | !$_POST['password'] | !$_POST['email']) {
						die('Please complete the entire form.');
					}
					if(!get_magic_quotes_gpc()) {
						$_POST['username'] = addslashes($_POST['username']);
					}

					$usercheck = $_POST['username'];
					$emailcheck = $_POST['email'];


					$sql = "SELECT COUNT(*) AS '# of matches' FROM login WHERE username = '".$usercheck."'";
					$check = $db->query($sql);
					$result = $check->fetchArray();
					if($result[0] != 0) { 
						die('Sorry, the username "'.$_POST['username'].'" is already in use.');
					}

					$sql = "SELECT COUNT(*) AS '# of matches' FROM login WHERE email = '".$emailcheck."'";
					$check = $db->query($sql);
					$result = $check->fetchArray();
					if($result[0] !=0) {
						die('Sorry, the email "'.$_POST['email'].'" is already in use.');
					}


					$_POST['password'] = md5($_POST['password']);
					if(!get_magic_quotes_gpc()) {
						$_POST['password'] = addslashes($_POST['password']);
						$_POST['username'] = addslashes($_POST['username']);
						$_POST['email'] = addslashes($_POST['email']);
					}

					$insert = "INSERT INTO login(username, email, password) VALUES('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')";

					$result = $db-> query($insert);
					unset($db);

			?>

				<h1>Registered</h1>
				<p>Thank you, you have registered - you may now login.</p>
				<a href = "login.php"><button value = "Login" id = "loginBtn" style = "width: 50%; margin: auto" >Login</button></a>
			</div>
			<?php require 'footer.php'; ?>
			<?php 
		}

		else
		{
		?>
		
			<br><br>
			<form action - "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
				<fieldset>
					Email: <input type = "text" id = "email" name = "email" />
					Username: <input type = "text" id = "username" name = "username" />
					Password: <input type = "password" id = "password" name = "password" />
					<button name = "submit" type = "submit" value = "Register" id = "registerBtn" style = "width: 50%; margin: auto">Register</button>
				</fieldset>
			</form>
		<?php

		}
		?>

			<?php require 'footer.php'; ?>
		</div>
	</div>
</body>