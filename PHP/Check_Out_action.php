<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Cust_Id = $_POST['Cust_Id'];
	$Room_No = $_POST['Room_No'];
	
	$checksql = "SELECT Room_No, Cust_Id FROM ROOM WHERE Cust_Id = '$Cust_Id' AND Room_No = '$Room_No'";
	$check = mysqli_query($con, $checksql);

	$rownum = mysqli_num_rows($check);
	if($rownum == 0) {
		echo 'Customer and/or Room details invalid! <a href="ADMINPAGE.php">CLICK TO RETURN TO ADMINPAGE</a>';
		mysqli_close($con);
		exit;
	}
	
	$sql = "DELETE FROM CUSTOMER WHERE Cust_Id = '$Cust_Id';";
	$sql .= "UPDATE ROOM SET Duration_Days = NULL WHERE Room_No = '$Room_No';";
	$result = mysqli_multi_query($con, $sql);
	
	if ($result == false) {
		echo '<p>Checkout Failed! Try again! <a href="ADMINPAGE.php">CLICK TO RETURN TO ADMINPAGE</a></p>';
		mysqli_close($con);
		exit;
	}
	
	else {
		echo "<p>Checked Out Successfully!<br>Return to <a href='ADMINPAGE.php'>Admin Page</a></p>";
		
		mysqli_close($con);
	}
	
?>