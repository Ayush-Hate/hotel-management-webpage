<?php
	include("CONNECTTODB.php");
	session_start();
	$Cust_id=$_SESSION['guestid'];
	$Namesql="SELECT FName FROM CUSTOMER WHERE Cust_Id='$Cust_id'";
	$res=mysqli_query($con, $Namesql);	
	$row = mysqli_fetch_assoc($res);
	$guestname =$row['FName'];
?>