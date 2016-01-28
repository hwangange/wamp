<!DOCTYPE html>

<?
	phpinfo();
	$welcome_text = "Hello world";
	print($welcome_text);
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel = "stylesheet" type = "text/css" href = "../css/m.css" />
        <title>Hello World</title>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

		<script>
			$(document).bind('mobileinit', function() {
				$.mobile.changePage.defaults.changeHash = false;
				$.mobile.hashListeninEnabled = false;
				$.mobile.pushStateEnabled = false;
			});

			$( "contactForm").serializeArray();
		</script>

		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body class = "ui-mobile-viewport">
   
		<div data-role  ="page" id = "search" data-theme  = "a">
			<div data-role  ="header" data-position = "fixed">
				<h1>Title</h1>
			</div>
			<div data-role = "content">
				<h2>Search</h2>
				<form action = "forms-results.php" method = "post">
					<fieldset>
						<input type = "text" value = "" />
						<div data-role = "fieldcontain">
							<label for = "select-options" class = "select">Choose an option: </label>
							<select id = "select-options" name = "select-options">
								<option value = "option1">Option 1</option>
								<option value = "option2">Option 2</option>
								<option value = "option3">Option 3</option>
							</select>
						</div>
						<button type = "submit">Find</button>
					</fieldset>
				</form>
				<p><a href = "index.php" data-direction = "reverse">Back</a></p>
			</div>

			<div class = "footer" data-role = "footer" data-id = "myfooter" data-position = "fixed" data-theme = "a">
				<div class = "controls" data-role = "controlgroup" data-type = "horizontal">
					<a href = "#home" class = "ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-home" data-role = "button" data-icon = "home">Home</a>
					<a href = "#search" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-search" data-role = "button" data-icon = "search">Search</a>
					<a href = "#ask" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-info" data-role = "button" data-icon = "phone">Ask</a>
					<a href = "/index.php" rel = "external" data-role = "button" data-icon  ="plus">Full site</a>
				</div>
			</div>
		</div>


        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
    </body>
</html>

