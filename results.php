<html>
	<?php require 'head.php';?>
	<body class = "ui-mobile-viewport">
		<div data-role = "page" id = "ask" data-theme = "a">
			<?php require 'header.php';?>
			<div data-role = "content">
				<h2>Search results: </h2>
				<?php
					$myfile = fopen("names.txt", "r") or die ("Unable to read file!");
					while(!feof($myfile)) {
						$name = fgets($myfile);
						$a[] = $name;
					}
					fclose($myfile);
					$q = $_REQUEST["name"];
					$hint = "";
					if($q !== "") {
						$q = strtolower($q);
						$len = strlen($q);
						foreach($a as $name) {
							if(stristr($q, substr($name, 0, $len))) {
								if($hint ==="") {
									$hint = "<p> $name </p>";
								} else {
									$hint .= "<p> $name </p>";
								}
							}
						}
					}
						echo $hint === "" ? "no suggestion" : $hint;
				?>	
				<p><a href = "index.php" data-direction = "reverse">Back</a></p>
			</div>
			<?php require 'footer.php'; ?>
		</div>
	</body>
</html>
					