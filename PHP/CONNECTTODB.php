<!-- USED TO CONNECT TO THE HOTELDB-->
<?php
	error_reporting(0);
	$ServerName = "localhost:3306";
	$UserName = "ayush";
	$Password = "ayat15cs";
	$con = mysqli_connect($ServerName,$UserName,$Password);
	if(!$con)
	{
		die("Connection to database failed! " . mysqli_connect_error());
	}
	else
	{
		mysqli_select_db($con,"HotelDB");
	}
	
?>

