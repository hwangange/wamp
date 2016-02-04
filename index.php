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
				<ul data-role = "listview" data-inset = "true">
					<li><a href = "search.php">Search</a></li>
					<li><a href = "feedback.php">Ask</a></li>
					<li><a href = "#about">About</a></li>
					<li><a href = "test.php">Test</a></li>
					<li><a href = "read.php">Read</a></li>
					<li><a href = "#cats">Blank</a></li>
					<li><a href = "sqlite.php">SQLite</a></li>
				</ul>
			</div>
			<?php require 'footer.php';?>
		</div>

		<div data-role = "page" id = "cats" data-theme = "a">
			<?php require 'header.php'; ?>
			<div data-role = "content">
				<h2>Title</h2>
				
			</div>	
			<?php require 'footer.php'; ?>
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

