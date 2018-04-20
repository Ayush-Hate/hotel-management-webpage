<?php
	include("CONNECTTODB.php");
	session_start();
	$Staff_id=$_SESSION['staffid'];
	$Namesql="SELECT FName FROM STAFF WHERE Staff_Id='$Staff_id'";
	$res=mysqli_query($con, $Namesql);	
	$row = mysqli_fetch_assoc($res);
	$staffname =$row['FName'];
?>