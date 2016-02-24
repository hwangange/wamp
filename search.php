<!DOCTYPE html>

<?
	session_start();
    if(!isset($_SESSION['login_user'])) {
        header("Location: login.php");
        exit;
    }
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

		<script>
		/*	$(document).ready(function() {
				$('#searchBtn').click(function(event) {
					event.preventDefault();
					var query = $('#name').val();
					search(query);
				});
			});  */
		</script>
    </head>
    
    <body class = "ui-mobile-viewport">
   
		<div data-role  ="page" id = "search" data-theme  = "a">
			<?php require 'header.php';?>
			
			<div data-role = "content">
				<h2>Search</h2>
				<form action = "results.php" method = "post">
					<fieldset>
						<input type = "text" id = "name" name = "name" onkeyup = "showHint(this.value)" />
						<p>Suggestions: <span id = "txtHint"></span></p>
						<div data-role = "fieldcontain">
							<label for = "select-options" class = "select">Choose an option: </label>
							<select id = "select-options" name = "select-options">
								<option value = "option1">Option 1</option>
								<option value = "option2">Option 2</option>
								<option value = "option3">Option 3</option>
							</select>
						</div>
						<button type = "submit" id = "searchBtn">Find</button>
					</fieldset>
				</form>
				<div id = "results"></div>
				<p><a href = "index.php" data-direction = "reverse">Back</a></p>
			</div>

			<?php require 'footer.php';?>
		</div>


      <!--  <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>-->

        <script>
        	function showHint(str) {
        		if(str.length == 0) {
        			document.getElementById("txtHint").innerHTML = "";
        			return;
        		} else {
        			if(window.XMLHttpRequest) {
        				xmlhttp = new XMLHttpRequest();
        			} else {
        				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        			}
        			xmlhttp.onreadystatechange = function() {
        				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        					document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        				}
        			};
        			xmlhttp.open("GET", "gethint.php?q=" + str, true);
        			xmlhttp.send();
        		}
        	}

        /*	function search(str) {
        		if(str.length == 0) {
        			document.getElementById("results").innerHTML = "";
        			return;
        		} else {
        			if(window.XMLHttpRequest) {
        				xmlhttp = new XMLHttpRequest();
        			} else {
        				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        			}
        			
        			xmlhttp.open("GET", "results.php?q=" + str, true);
        			xmlhttp.send();
        		}
        	}  */
        </script>
    </body>
</html>

