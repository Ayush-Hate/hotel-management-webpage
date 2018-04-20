<!-- MAIN HOME PAGE. THIS WILL HAVE A 3 COLUMN LAYOUT WITH FOOTER AND PICTURE banner. THIS WILL HAVE TWO SECTIONS FOR LOGINS ONE FOR CUSTOMER AND ONE FOR FRONT DESK ADMINISTRATORS.-->

<?php
	include("CONNECTTODB.php");
	session_start();
?>

<html>
<head>
	<title>MyGuest HomePage</title>
<!--PUT IN STYLESHEET LATER-->
	<style>
	
		body {
			background-color: rgb(229,229,229);
		     }

		.MainContainer {
			width: 100%;
		     }

		.BannerHeader {
			position: absolute;
			z-index: -1;
		     }

		.BannerDiv {
			background: url('IMAGES/HOMEPAGE/HOMEBANNER.jpg') center;
		     	z-index: -1;
			background-size: auto;
			height: 350px;
			padding: 100px;
			margin: auto;
			border: 1px solid green;
		     }

		.BannerTextDiv {
			height: auto;
			position: sticky;
			top: 0;
			margin: auto;
			
		     }

		.BannerText {
			color: white;
			font-size: 50px;
			font-weight: 600;
			font-family: Serif;
		     }
		
		.EmphasizedHeader {
			font-size: 60px;
			color: #FCDD44;
		     }

		.ThreeColumnPictureAndTabbedForm {
			margin: auto;
			padding: 200px;
		     }

		.ImageColumnA {
			float: left;
			position: relative;
			top: -30px;
			z-index: 0;
			width: 25%;
			background: url('IMAGES/HOMEPAGE/LEFTIMAGE.jpg') no-repeat center;
			padding: 10px;
			margin: 0px 30px 0px 100px;
			height: 300px;
			border: 1px solid green;
			border-radius: 100px 20px;
		     }

		.ImageColumnB {
			float: left;
			z-index: 0;
			width: 25%;
			background: url('IMAGES/HOMEPAGE/RIGHTIMAGE.jpg') no-repeat center;
			position: relative;
			top: -30px;
			padding: 10px;
			margin: 0px 30px 0px 10px;
			height: 300px;
			border: 1px solid green;
			border-radius: 20px 100px;
		     }

		.FormColumn {
			float: left;
			z-index: 0;
			background-color: #feffec;
			position: relative;
			border: 1px solid green;
			border-radius: 30px;
			top: -30px;
			width: 25%;
			padding: 10px;
			margin: 0px 10px 0px 10px;
			height: 300px;
		     }

		.TabbedPane {
			overflow: hidden;
			background-color: white;
	   	     }
		
		div.TabbedPane button {
			background-color: #fcdd44;
			float: left;
			width: 50%;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 5px;
			transition: 0.5s;
			font-size: 20px;
		     }
		
		div.TabbedPane button:hover {
			background-color: #ebc700;
		     }
			
		div.TabbedPane button.active {
			background-color: #fff5bc;
		     }
		
		div.FormContents {
			display: none;
			padding: 5px;
			border-top: none;
			animation: fadeEffect 2s;
		     }
		
		@keyframes fadeEffect {
 			from {opacity: 0.5;}
			to {opacity: 1;}
		     }

		fieldset {
			border-radius: 10px;
			border: 2px dotted #fcdd44;
		     }
	
		legend {
			color: green;
		     }

		label {
			float: left;
			width: 40%;
			margin-right: 10px;
			padding-top: 5px;
 			text-align: right;
		     }

		input {
			width: 55%;
  			padding-top: 5px;
			text-align: middle;
		     }
			
		.LoginButton {
			text-align: center;
		     }
		
		footer {
			background-color: black;
			text-align: center;
			color: #fedd44;
			font-size: 13px;
			position: relative;
			z-index: -1;
			bottom: -100px;
			}
			
						
	</style>
</head>
<body>
	<div class="MainContainer">	
		<section id="BannerHeader">
			<div class="BannerDiv">
				<div class="BannerTextDiv">
					<h1 class="BannerText">Welcome To the <span class="EmphasizedHeader">Gazillionaire Hotel</span> MyGuest Manager</h1>
				</div>
			</div>
		</section>
		<section id="ThreeColumnPictureAndTabbedForm">
			<div class="Row">
				<div class="ImageColumnA"></div>
				<div class="FormColumn">
					<div class="TabbedPane">
						<button class="TabLink" onClick="OpenForm(event, 'Guest')" id="default">Guests</button>
						<button class="TabLink" onClick="OpenForm(event, 'Admin')">Staff</button>
					</div>
					<div id="Guest" class="FormContents">
						<form method="POST" action="login_action_guest.php">
						<fieldset>
						<legend>Login</legend>
						<p><label for="Cust_Id">Customer ID:</label> <input type="text" name="Cust_Id" id="Cust_Id" required /></p>
						<p><label for="Phone_No">Phone Number:</label> <input type="password" name="Phone_No" id="Phone_No" required /></p>
						<p class="LoginButton"><input value="Login" type="submit" class="center" /></p>
						</fieldset>
						</form>
					</div>
					<div id="Admin" class="FormContents">
						<form method="POST" action="login_action_admin.php">
						<fieldset>
						<legend>Login</legend>
						<p><label for="Staff_Id">Staff ID:</label> <input type="text" name="Staff_Id" id="Staff_Id" required /></p>
						<p><label for="Phone_No">Phone Number:</label> <input type="password" name="Phone_No" id="Phone_No" required /></p>
						<p class="LoginButton"><input value="Login" type="submit"/></p>
						</fieldset>
						</form>
					</div>
					<script>
						function OpenForm(event, UserType) 
						{
							var i, FormContents, TabLink;
							FormContents = document.getElementsByClassName("FormContents");
    							for (i = 0; i < FormContents.length; i++)
							{
								FormContents[i].style.display = "none";
    							}
							TabLink = document.getElementsByClassName("TabLink");
    							for (i = 0; i < TabLink.length; i++) 
							{
								TabLink[i].className = TabLink[i].className.replace(" active", "");
							}
							document.getElementById(UserType).style.display = "block";
							event.currentTarget.className += " active";
						}
						document.getElementById("default").click();
					</script>
				</div>
				<div class="ImageColumnB"></div>
			</div>
		</section>
	<footer>
		<p class="Footer">Made By: AYUSH HATE 1CR15CS036</p>
	</footer>
</div>
</body>
</html>