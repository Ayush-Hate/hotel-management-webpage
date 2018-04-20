<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Cust_Id = $_POST['Cust_Id'];
	$Amenity_Id = $_POST['Amenity_Id'];
	$Time = $_POST['Time'];
	
	$sql = "REPLACE INTO AVAILS VALUES ('$Cust_Id','$Amenity_Id','$Time')";
	
	$result = mysqli_query($con, $sql);
	
	if ($result == false) {
		echo '<p>Booking Failed! Try again! <a href="GUESTPAGE.php">CLICK TO RETURN TO GUEST PAGE</a></p>';
		mysqli_close($con);
		exit;
	}
	
	else {
		echo "<p>Amenity booked Successfully!<br>Return to <a href='GUESTPAGE.php'>Guest Page</a></p>";
		
		mysqli_close($con);
	}
	
?>