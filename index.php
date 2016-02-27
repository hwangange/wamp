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
       <!-- <div class="app">
            <h1>Hello PhoneGap</h1>
            <div id="deviceready" class="blink">
                <p class="event listening">Connecting to Device</p>
                <p class="event received">Device is Ready</p>
            </div>
        </div> -->

        <div data-role = "page" id = "home" data-theme = "a">
			<?php require 'header.php';?>
			<div data-role = "content">
				<h2>Welcome <i><?php echo $_SESSION['login_user']; ?></i></h2>
				<a href = "logout.php"><p>Log Out</p></a>
			</div>
			<?php require 'footer.php';?>
		</div>
		<?php require 'panel.php';?>

    </body>
</html>

