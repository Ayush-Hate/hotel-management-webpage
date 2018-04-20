<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Staff_Id = $_POST['Staff_Id'];
	$Phone_No = $_POST['Phone_No'];
	$sql = "SELECT Staff_Id, Phone_No FROM STAFF WHERE Staff_Id= '$Staff_Id' AND Phone_No = '$Phone_No';";
	$result = mysqli_query($con, $sql);
	
	$num_rows = mysqli_num_rows($result);

	
	if ($num_rows == 0) {
		echo '<p><a href="HOMEPAGE.php">LOGIN FAILED! ENTER VALID CREDENTIALS! CLICK TO RETURN TO HOMEPAGE</a></p>';
		mysqli_close($con);
		exit;
	}

	else if ($num_rows == 1) {
		$_SESSION['login'] = "OK";
		$_SESSION['staffid'] = $Staff_Id;
		header('Location: ADMINPAGE.php');
		mysqli_close($con);
		die();
		exit;
	}
	
?>