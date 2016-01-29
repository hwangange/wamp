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
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel = "stylesheet" type = "text/css" href = "css/m.css" />
        <title>Hello World</title>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    
    <body class = "ui-mobile-viewport">
   
		<div data-role  ="page" id = "search" data-theme  = "a">
			<?php require 'header.php';?>
			
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

			<?php require 'footer.php';?>
		</div>


      <!--  <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>-->
    </body>
</html>

