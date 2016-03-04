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
				<?php
				$db_host = "localhost";
				$db_username = "root";
				$db_pass = "";
				$db_name = "forms";
				
				$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
				if($conn->connect_error) {
					die("Connection failed" . $conn->connect_error);
				}
				  
				$criteria = array('name', 'id', 'year', 'teacher', 'date', 'hours', 'description', 'studentSig', 'organization', 'number', 'address', 'contactName', 'contactEmail', 'orgSig', 'parentSig');

				if(isset($_POST['submit'])) {
					echo "submit is set.";
					foreach($criteria as $x) {
						if(!$_POST[$x])
							die('Please complete the entire form.');
					}

					if(!get_magic_quotes_gpc()) {
						foreach($criteria as $x) {
							$_POST[$x] = addslashes($_POST[$x]);
							$$x = $_POST[$x];
						}

						$user =$_SESSION['login_user'];

					}

					$str = "INSERT INTO verify(user, ";
						foreach($criteria as $x) {
							if($x !== end($criteria))
								$str = $str . $x . ", ";
							else $str = $str . $x . ") VALUES (";
						}

						$str = $str . "'" . $user . "', ";

						foreach($criteria as $x) {
							if($x !== end($criteria))
								$str = $str . "'" . $$x . "', ";
							else $str = $str . "'" . $$x . "')";
						}

						$sql = $str;

						/*$sql = "INSERT INTO verify (name, id, year, teacher, date, hours, description, studentSig, organization, number, address, contactName, contactEmail, orgSig, parentSig) VALUES ('$name', '$id', 'year', '')"; */

					if ($conn->query($sql) === TRUE) {
					    echo "Form has been submitted for verification.";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}

				else if(isset($_POST['save'])) {
					foreach($criteria as $x) {
						if(!$_POST[$x])
							$_POST[$x] = 'empty';
					}

					if(!get_magic_quotes_gpc()) {
						foreach($criteria as $x) {
							$_POST[$x] = addslashes($_POST[$x]);
							$$x = $_POST[$x];
						}

						$user =$_SESSION['login_user'];

					}

					$str = "INSERT INTO drafts(user, ";
						foreach($criteria as $x) {
							if($x !== end($criteria))
								$str = $str . $x . ", ";
							else $str = $str . $x . ") VALUES (";
						}

						$str = $str . "'" . $user . "', ";

						foreach($criteria as $x) {
							if($x !== end($criteria))
								$str = $str . "'" . $$x . "', ";
							else $str = $str . "'" . $$x . "')";
						}

						/*$sql = "INSERT INTO verify (name, id, year, teacher, date, hours, description, studentSig, organization, number, address, contactName, contactEmail, orgSig, parentSig) VALUES ('$name', '$id', 'year', '')"; */

						$sql = $str;
					if ($conn->query($sql) === TRUE) {
					    echo "Form saved to drafts.";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}

		else {
			?>
				<b>User: <i><?php echo $_SESSION['login_user'];?></i></b>
				<br>
				<form action - "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
					<fieldset>
						Name: <input type = "text" id = "name" name = "name" />
						Student ID: <input type = "text" id = "id" name = "id" maxlength="6" />
						Class of: <input type = "text" id = "year" name = "year" maxlength="4" />
						3rd Period Teacher: <input type = "text" id = "teacher" name = "teacher"/>
						Date(s) Service Performed: <input type = "text" id = "date" name = "date"/>
						Number of Hours of Service: <input type = "text" id = "hours" name = "hours"/>

						Brief Description of community service: <input type = "text" id = "description" name = "description" />

						<div data-role = "fieldcontain">
							<label for = "select-options" class = "select">Were you paid, rewarded or required to do this service?  </label>
							<select id = "select-options" name = "select-options">
								<option value = "yes">Yes</option>
								<option value = "no">No</option>
							</select>
						</div>
						Signature of student: <input type = "text" id = "studentSig" name = "studentSig" />
						<h2>Non-profit organization/Agency information</h2>
						Organization Name: <input type = "text" id = "org" name = "organization" />
						Phone Number: <input type = "text" id = "number" name = "number" />
						Street Address: <input type = "text" id = "address" name = "address" />
						<h2>Contact Person Information</h2>
						Name: <input type = "text" id = "contactName" name = "contactName"/>
						Email: <input type = "text" id = "contactEmail" name = "contactEmail"/>
						Signature and Date: <input type = "text" id = "orgSig" name = "orgSig" />
						Signature of Parent/Guardian: <input type = "text" id = "parentSig" name = "parentSig" />
						<div style = "display: flex">
							<button type = "submit" name = "submit" id = "submitBtn" style = "width: 40%; margin: auto">Submit</button>
							<button type = "save" name = "save" id = "saveBtn" style = "width: 40%; margin: auto">Save Draft</button>
						</div>
					</fieldset>
				</form>
			<?php 
				}
				?>
			
			<?php require 'footer.php'; ?>
		</div>
	</body>
</html>


