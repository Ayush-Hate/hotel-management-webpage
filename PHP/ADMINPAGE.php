<!-- ADMIN HOME PAGE. THIS WILL HAVE A 2 COLUMN LAYOUT WITH FOOTER AND PICTURE banner. THIS WILL HAVE TWO SECTIONS ONE TABBED PANE TO SELECT OPERATION ONE TO CARRY OUT SELECTED OPERATION-->
<?php
	include("validate.php");
	include("admin_info.php");
?>
<html>
<head>
	<title>Admin Portal</title>
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
			text-align: center;
		     }
		
		.EmphasizedHeader {
			font-size: 60px;
			color: #FCDD44;
		     }

		.TwoColumnMenuAndTabbedResults {
			margin: auto;
			padding: 200px;
		     }

		.MenuColumn {
			float: left;
			position: relative;
			top: -30px;
			z-index: 0;
			width: 15%;
			background: url('IMAGES/HOMEPAGE/LEFTIMAGE.jpg') no-repeat center;
			padding: 10px;
			margin: 0px 30px 0px 30px;
			min-height: 300px;
			border: 1px solid green;
			border-radius: 100px 20px;
		     }


		.ResultColumn {
			float: left;
			z-index: 0;
			background-color: #feffec;
			position: relative;
			border: 1px solid green;
			border-radius: 30px;
			top: -30px;
			width: 75%;
			padding: 10px;
			margin: 0px 10px 0px 10px;
			min-height: 300px;
		     }

		.TabbedPane {
    			background-color: rgba(255,255,255,0.3);
			margin: auto;
		    	width: 55%;
    			min-height: 300px;
			padding: 10px 0px 0px 0px;
	   	     }
		
		div.TabbedPane button {
			display: block;
			background-color: #fcdd44;
			width: 95%;
			outline: none;
			border: none;
			cursor: pointer;
			padding: 10px;
			transition: 0.5s;
			font-size: 20px;
			text-align: center;
			margin: auto;
		     }
		
		div.TabbedPane button:hover {
			background-color: #ebc700;
		     }
			
		div.TabbedPane button.active {
			background-color: #fff5bc;
		     }
		
		div.FormContents {
			display: none;
			padding: 10px;
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
		
		.Footer {
			background-color: black;
			text-align: center;
			color: #fedd44;
			position: absolute;
			bottom: 0;
			z-index: -1;
			max-height: 100px;
			width: 100%;
		     }
		
		.defaultPage {
			margin: auto;
			text-align: center;
			font:italic 60px Georgia, serif;
			
		     }
		
		.defaultPageAlt {
			margin: auto;
			text-align: center;
			font:italic 30px Georgia, serif;
			
		     }
		
		.defaultPageName {
			color: #fcdd44;
			font-size: 50px;
			font-weight: 600;
			font-family: Serif;
			text-align: center;
		     }
			
						
	</style>
</head>
<body>
	<div class="MainContainer">	
		<section id="BannerHeader">
			<div class="BannerDiv">
				<div class="BannerTextDiv">
					<h1 class="BannerText">MyGuest Manager <br><span class="EmphasizedHeader">Gazillionaire Hotel</span></h1>
				</div>
			</div>
		</section>
		<section id="TwoColumnMenuAndTabbedResults">
			<div class="Row">
				<div class="MenuColumn">
					<div class="TabbedPane">
						<button class="TabLink" onClick="OpenForm(event, 'Home')" id="default">Home</button><br>
						<button class="TabLink" onClick="OpenForm(event, 'Book')">Book Room</button><br>
						<button class="TabLink" onClick="OpenForm(event, 'CheckOut')">Check Out</button><br>
					</div>
				</div>
				<div class="ResultColumn">
					<div id="Home" class="FormContents">
						<h1 class="defaultPageName">WELCOME <?php echo $staffname; ?>!</h1>
						<h1 class="defaultPage">Click a tab to get Started!</h1>
						<h4 class="defaultPageAlt"> or click <a href="logout.php">HERE</a> to logout.</h4>
					</div>
					<div id="Book" class="FormContents">
						<form method="post" action="Book_Room_action.php" style="max-width: 50%;margin: auto;">
						<fieldset>
						<legend>Book a Room</legend>
						<p><label for="Cust_Id">Customer ID:</label> <input type="number" name="Cust_Id" id="Cust_Id" /></p>
						<p><label for="FName">First Name:</label> <input type="text" name="FName" id="FName" /></p>
						<p><label for="MName">Middle Name:</label> <input type="text" name="MName" id="MName" /></p>
						<p><label for="LName">Last Name:</label> <input type="text" name="LName" id="LName" /></p>
						<p><label for="DOB">Date of Birth</label> <input type="date" name="DOB" id="DOB" /></p>
						<p><label for="Address">Address</label> <input type="text" name="Address" id="Address" /></p>
						<p><label for="Phone_No">Phone Number:</label> <input type="text" name="Phone_No" id="Phone_No" maxlength="10" /></p>
						<p><label for="Staff_Id">Staff ID:</label> <input type="number" name="Staff_Id" value='<?php echo "$Staff_id"; ?>' id="Staff_Id" readonly="readonly"/></p>
						<p><label for="Room_No">Room Number:</label> <input type="number" name="Room_No" id="Room_No" /></p>
						<p><label for="Duration_Days">Duration of Stay in Days:</label> <input type="number" name="Duration_Days" id="Duration_Days" /></p>
						<p class="LoginButton"><input value="Book" type="submit" class="center" /></p>
						</fieldset>
						</form>
					</div>
					<div id="CheckOut" class="FormContents">
						<form method="post" action="Check_Out_action.php"  style="max-width: 50%;margin: auto;">
						<fieldset>
						<legend>Check Out</legend>
						<p><label for="Cust_Id">Customer ID:</label> <input type="text" name="Cust_Id" id="Cust_Id" /></p>
						<p><label for="Room_No">Room Number:</label> <input type="number" name="Room_No" id="Room_No" /></p>
						<p class="LoginButton"><input value="Check Out" type="submit" class="center" /></p>
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
	</div>
</div>
	<div class="Footer">
		<p>Made By: AYUSH HATE 1CR15CS036</p>
	</div>
</body>
</html>