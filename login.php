 <?php
		session_start();	
?>

<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<?php
				$db = new SQLite3('../logindb.sq3');
				if(isset($_POST['submit'])) {
					if(!$_POST['username'] | !$_POST['password']) {
						die('Please complete the entire form.');
					}
					if(!get_magic_quotes_gpc()) {
						$_POST['username'] = addslashes($_POST['username']);
					}

				/*	$usercheck = $_POST['username'];
					$passcheck = $_POST['password'];


					$sql = "SELECT * FROM login WHERE username = '".$usercheck."' AND password = '".$passcheck."'";
					$check = $db->query($sql);
					$result = $check->fetchArray();
					echo var_dump($result); */

					//$db = new SQLite3('../logindb.sq3');
					$username =  $_POST["username"];

					$_POST['password'] = md5($_POST['password']);
					$password = $_POST["password"];



					$sql = "SELECT COUNT(*) AS '# of matches' FROM login WHERE username ='" . $username . "' AND password = '" . $password . "'";
					$check = $db->query($sql);
					$result = $check->fetchArray();
					echo var_dump($result);
					if($result[0] == 0) { 
						die('Sorry, the username and password do not match.');
					} else {
						$_SESSION['login_user'] = $username;
						header('Location: index.php');
					}

					unset($db);
			?>
				
			</div>
			<div class = "footer" data-role = "footer" data-id = "myfooter" data-position = "fixed" data-theme = "a">
				<div class = "controls" data-role = "controlgroup" data-type = "horizontal"></div>
			</div>
			<?php 
		}

		else
		{
		?>
		
			<br><br>
			<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method = "post">
				<fieldset>
					Username: <input type = "text" id = "username" name = "username" />
					Password: <input type = "password" id = "password" name = "password" />
					<button type = "submit" name = "submit" id = "loginBtn" style = "width: 50%; margin: auto">Login</button>
				</fieldset>
				<p><?php echo "Hello!"; ?></p>
				<p style = "text-align: center">New? <a href = "register.php">Register</a> to create a new account.</p>
			</form>
		<?php

		}
		?>

			<div class = "footer" data-role = "footer" data-id = "myfooter" data-position = "fixed" data-theme = "a">
				<div class = "controls" data-role = "controlgroup" data-type = "horizontal"></div>
			</div>
		</div>
	</div>
</body>