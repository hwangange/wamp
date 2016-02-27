<?php
	session_start();
	if(!isset($_SESSION['login_user'])) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<?php require 'head.php'; ?>
	<body class = "ui-mobile-viewport">
		<div data-role = "page" id = "profile" data-theme = "a">
			<?php require 'header.php'; ?>
			<?php require 'panel.php';?>
			<div data-role = "content">
				<b id = "welcome">Welcome : <i><?php echo $_SESSION['login_user'];?></i></b>
				<br>
				<b id = "logout"><a href = "logout.php">Log Out</a></b>
			</div>
			<?php require 'footer.php'; ?>
		</div>
	</body>
</html>


