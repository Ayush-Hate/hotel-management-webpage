<?php
	error_reporting(0);
	session_start();
	if((!(isset($_SESSION['login'])) && ($_SESSION['login'] != "OK"))) {
		session_destroy();
		header("Location: HOMEPAGE.php");
		exit;
	}
?>