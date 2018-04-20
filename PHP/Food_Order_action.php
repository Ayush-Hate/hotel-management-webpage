<?php
	
	include("CONNECTTODB.php");
	session_start();

	$Cust_Id = $_POST['Cust_Id'];
	$Food_Id = $_POST['Food_Id'];
	$Quantity = $_POST['Quantity'];
	
	$sql = "REPLACE INTO ORDERED_BY VALUES ('$Cust_Id','$Food_Id','$Quantity')";
	
	$result = mysqli_query($con, $sql);
	
	if ($result == false) {
		echo '<p>Order Failed! Try again! <a href="GUESTPAGE.php">CLICK TO RETURN TO GUEST PAGE</a></p>';
		mysqli_close($con);
		exit;
	}
	
	else {
		echo "<p>Food Ordered Successfully!<br>Return to <a href='GUESTPAGE.php'>Guest Page</a></p>";
		
		mysqli_close($con);
	}
	
?>