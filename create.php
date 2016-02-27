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
							<button type = "submit" id = "submitBtn" style = "width: 40%; margin: auto">Submit</button>
							<button type = "save" id = "saveBtn" style = "width: 40%; margin: auto">Save Draft</button>
						</div>
					</fieldset>
				</form>
			</div>
			<?php require 'footer.php'; ?>
		</div>
	</body>
</html>


