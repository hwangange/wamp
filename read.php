<!DOCTYPE html>
<html>
	<?php require 'head.php';?>
	<body class = "ui-mobile-viewport">
		  <div data-role = "page" data-theme = "a">
				<?php require 'header.php';?>
				<div data-role = "content">
					<?php
						$myfile = fopen("names.txt", "r") or die ("Unable to read file!");
						while(!feof($myfile)) {
							$name = fgets($myfile);
							echo "<p>" . $name . "</p>";
							$a[] = $name;
						}
						fclose($myfile);
					?>
				</div>
					<?php require 'footer.php';?>
			</div>
	</body>
</html>
