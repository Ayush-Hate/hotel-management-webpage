<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Cust_Id = $_POST['Cust_Id'];
	$Phone_No = $_POST['Phone_No'];
	$sql = "SELECT Cust_Id, Phone_No FROM CUSTOMER WHERE Cust_Id= '$Cust_Id' AND Phone_No = '$Phone_No'";
	$result = mysqli_query($con, $sql);

	$num_rows = mysqli_num_rows($result);
	
	if ($num_rows == 0) {
		echo '<a href="HOMEPAGE.php">LOGIN FAILED! ENTER VALID CREDENTIALS! CLICK TO RETURN TO HOMEPAGE</a>';
		mysqli_close($con);
		exit;
	}

	else if ($num_rows == 1) {
		$_SESSION['login'] = "OK";
		$_SESSION['guestid'] = $Cust_Id;
		header('Location: GUESTPAGE.php');
		mysqli_close($con);
		die();
		exit;
	}
?>