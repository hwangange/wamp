
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
				
				$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
				if($conn->connect_error) {
					die("Connection failed" . $conn->connect_error);
				}
				  
				if(isset($_POST['submit'])) {
					if(!$_POST['username'] | !$_POST['password'] | !$_POST['email']) {
						die('Please complete the entire form.');
					}
					if(!get_magic_quotes_gpc()) {
						$_POST['username'] = addslashes($_POST['username']);
					}

					$usercheck = $_POST['username'];
					$emailcheck = $_POST['email'];

					$sql = "SELECT * FROM login WHERE username = '$usercheck'";			
					$existCount = mysqli_num_rows($conn->query($sql));
					if($existCount != 0) { 
						die('Sorry, the username '. $usercheck.' is already in use.');
					}

					$sql = "SELECT * FROM login WHERE email = '$emailcheck'";	
					
					$existCount = mysqli_num_rows($conn->query($sql));
					if($existCount !=0) {
						die('Sorry, the email '. $emailcheck .' is already in use.');
					}


					$_POST['password'] = md5($_POST['password']);
					if(!get_magic_quotes_gpc()) {
						$_POST['password'] = addslashes($_POST['password']);
						$_POST['username'] = addslashes($_POST['username']);
						$_POST['email'] = addslashes($_POST['email']);
						$password = $_POST['password'];
						$username = $_POST['username'];
						$email = $_POST['email'];
					}

					$sql = "INSERT INTO login (username, email, password)
					VALUES ('$username','$email','$password')";

					if ($conn->query($sql) === TRUE) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
					

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
			<p style = "text-align: center">Back to <a href = "login.php">Login</a></p>
		<?php

		}
		?>

			<div class = "footer" data-role = "footer" data-id = "myfooter" data-position = "fixed" data-theme = "a">
				<div class = "controls" data-role = "controlgroup" data-type = "horizontal"></div>
			</div>
		</div>
	</div>
</body>