<?php
	session_start();
//	$_SESSION['login'] = "FAIL";
//	$_SESSION['staffid'] = 0;
	
	session_destroy();
	header("Location: HOMEPAGE.php");
?>