 <?php
		session_start();	
?>

<?php require 'head.php'; ?>
<body class = "ui-mobile-viewport">
	<div data-role = "page" id = "home" data-theme = "a">
		<?php require 'header.php'; ?>
		<div data-role = "content">
			<?php
				$db_host = "localhost";
				$db_username = "root";
				$db_pass = "";
				$db_name = "logindb";
			
				$db = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die ("could not connect to mysql");

				if(isset($_POST['submit'])) {
					if(!$_POST['username'] | !$_POST['password']) {
						die('Please complete the entire form.');
					}
					if(!get_magic_quotes_gpc()) {
						$_POST['username'] = addslashes($_POST['username']);
					}

					$username =  $_POST["username"];

					$_POST['password'] = md5($_POST['password']);
					$password = $_POST["password"];



					$sql = mysqli_query($db, "SELECT * FROM login WHERE username ='$username' AND password = '$password'");

					$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
					$active = $row['active'];
					
					$existCount = mysqli_num_rows($sql);
					if($existCount == 0) { 
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