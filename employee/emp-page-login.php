<?php include '../include/header.php'; ?>

<?php

	$empIDErr = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["empID"])) {
	        $empIDErr = "ERROR: Please enter ID.";
		} else if ((strlen($_POST["empID"]) < 8) || (strlen($_POST["empID"]) > 8)) {
			$empIDErr = "ERROR: Invalid ID.";
		} else {
			header('Location: emp-page.php');
		}
	}
?>

<div class="login">
			<!--<form action="emp-page.php" method="POST">-->
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<span class="error"><?php echo $empIDErr;?></span>
				<br />
				Enter ID: <input type="text" name="empID">
				<input type="submit" name="submit">
				
			</form>
		</div>

<?php include '../include/footer.php'; ?>