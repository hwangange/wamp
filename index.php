<?php
	session_start();
	if(!isset($_SESSION['login_user'])) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>

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

	<!--	<script>
			$(document).bind('mobileinit', function() {
				$.mobile.changePage.defaults.changeHash = false;
				$.mobile.hashListeninEnabled = false;
				$.mobile.pushStateEnabled = false;
			});

			$( "contactForm").serializeArray();
		</script>-->

		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script>
			$.ajax({
					url: "http://query.yahooapis.com/v1/public/yql",
					jsonp: "callback",
					dataType: "jsonp",
					data: {
						q:"select title,abstract,url from local.search where zip=\"77479\" and query=\"food\"",
						format: "json"
					},

					success: function(response) {
					console.log(response);
				}
			});
		</script>	
    </head>
   
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
				<div class = "ui-grid-a">
					<div class = "ui-block-a"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Trending</p></div></div>
					<div class = "ui-block-b"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">U.S.</p></div></div>
					<div class = "ui-block-a"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">World</p></div></div>
					<div class = "ui-block-b"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Business</p></div></div>
					<div class = "ui-block-a"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Tech</p></div></div>
					<div class = "ui-block-b"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Health</p></div></div>
					<div class = "ui-block-a"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Entertainment</p></div></div>
					<div class = "ui-block-b"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Opinion</p></div></div>
					<div class = "ui-block-a"><div class = "ui-bar ui-bar-a category center"><p class = "vcenter">Science</p></div></div>
				</div>
				<!--<ul data-role = "listview" data-inset = "true">
					<li><a href = "search.php">Search</a></li>
					<li><a href = "feedback.php">Ask</a></li>
					<li><a href = "#about">About</a></li>
					<li><a href = "test.php">Test</a></li>
					<li><a href = "read.php">Read</a></li>
				</ul> -->
				<a href = "logout.php"><p>Log Out</p></a>
			</div>
			<?php require 'footer.php';?>
		</div>
		
		<div data-role = "page" id = "about" data-theme = "a">
			<?php require 'header.php';?>
			
			<div data-role = "content">
				<h2>About</h2>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.Donec non enim in turpis pulvinar facilisis. Ut felis.</p>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.Donec non enim in turpis pulvinar facilisis. Ut felis.</p>

				<p><a href = "#home" data-direction = "reverse">Back</a></p>
			</div>
			<?php require 'footer.php';?>
		</div>

    </body>
</html>

