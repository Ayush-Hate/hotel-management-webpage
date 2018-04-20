<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Cust_Id = $_POST['Cust_Id'];
	$FName = $_POST['FName'];
	$MName = $_POST['MName'];
	$LName = $_POST['LName'];
	$DOB = $_POST['DOB'];
	$Address = $_POST['Address'];
	$Phone_No = $_POST['Phone_No'];
	$Staff_Id = $_POST['Staff_Id'];
	$Room_No = $_POST['Room_No'];
	$Duration_Days = $_POST['Duration_Days'];
	
	$sql = "INSERT INTO CUSTOMER VALUES ('$Cust_Id','$FName','$MName','$LName','$DOB','$Address','$Phone_No','$Staff_Id','$Room_No');";
	$sql .= "UPDATE ROOM SET Cust_Id = '$Cust_Id', Duration_Days = '$Duration_Days' WHERE Room_No = '$Room_No'";
	
	$result = mysqli_multi_query($con, $sql);
	
	if ($result == false) {
		echo '<p>Booking Failed! Check if the room is not already booked! Try again! <a href="ADMINPAGE.php">CLICK TO RETURN TO ADMINPAGE</a></p>';
		mysqli_close($con);
		exit;
	}
	
	else {
		echo "<p>Room Booked Successfully!<br>Return to <a href='ADMINPAGE.php'>Admin Page</a></p>";
		
		mysqli_close($con);
	}
	
?>