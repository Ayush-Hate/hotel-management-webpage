<!-- GUEST HOME PAGE. THIS WILL HAVE A 2 COLUMN LAYOUT WITH FOOTER AND PICTURE banner. THIS WILL HAVE TWO SECTIONS ONE TABBED PANE TO SELECT OPERATION ONE TO CARRY OUT SELECTED OPERATION-->
<?php
	include("validate.php");
	include("guest_info.php");
?>
<html>
<head>
	<title>Guest Portal</title>
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
			position: sticky; 
		    	width: 50%;
    			height: 300px;
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
		
		footer {
	
			background-color: black;
			text-align: center;
			color: #fedd44;
			position: absolute;
			bottom: 0;
			z-index: -1;
			min-height: 50px;
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

		table {
			border: 2px solid black;
			margin: 0 auto;
			padding: 5px;
			text-align: center;
		     }

		th, td {
			border: 1px dashed grey;
			margin: 5px;
			padding: 5px;
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
						<button class="TabLink" onClick="OpenForm(event, 'Food')">Room Service</button><br>
						<button class="TabLink" onClick="OpenForm(event, 'Amenity')">Amenities</button><br>
						<button class="TabLink" onClick="OpenForm(event, 'Bills')">View Bills</button><br>
					</div>
				</div>
				<div class="ResultColumn">
					<div id="Home" class="FormContents">
						<h1 class="defaultPageName">WELCOME <?php echo "$guestname"; ?>!</h1>
						<h1 class="defaultPage"><br>Click a tab to get Started!</h1>
						<h4 class="defaultPageAlt"> or click <a href="logout.php">HERE</a> to logout.</h4>
					</div>
					<div id="Food" class="FormContents">
						<div style="margin: auto;">
						<?php
							$foodSQL = "SELECT * FROM FOOD";
							$foodSQLResult = mysqli_query($con, $foodSQL);
						?>
						<table>
							<caption style="color: green; font-family: serif; font-size: 40px; font-weight: 600;">Culinary Menu</caption>
							<tr>
								<th>Food ID</th>
								<th>Name</th>
								<th>Cuisine</th>
								<th>Price</th>
							</tr>
							<?php while(($cursor = mysqli_fetch_row($foodSQLResult))) { 
								$var1 = $cursor[0];
								$var2 = $cursor[1];
								$var3 = $cursor[2];
								$var4 = $cursor[3];
							?>
							<tr>
								<td><?php echo "$var1"; ?></td>
								<td><?php echo "$var2"; ?></td>
								<td><?php echo "$var3"; ?></td>
								<td><?php echo "$" . "$var4"; ?></td>
							</tr>
							<?php } ?>
						</table>
						<?php 	
							$ServerName = "localhost:3306";
							$UserName = "ayush";
							$Password = "ayat15cs";
							$con = mysqli_connect($ServerName,$UserName,$Password);
							mysqli_select_db($con,"HotelDB");
						?>
						</div><br><br>
						<form method="post" action="Food_Order_action.php" style="max-width: 50%;margin: auto;">
						<fieldset>
						<legend>Order Now</legend>
						<p><label for="Cust_Id">Customer ID:</label> <input type="number" name="Cust_Id" value='<?php echo "$Cust_id"; ?>' id="Cust_Id" readonly="readonly"/></p>
						<p><label for="Food_Id">Food ID:</label> <input type="text" name="Food_Id" id="Food_Id" /></p>
						<p><label for="Quantity">Quantity:</label> <input type="number" name="Quantity" id="Quantity" /></p>
						<p class="LoginButton"><input value="Order" type="submit"/></p>
						</fieldset>
						</form>
					</div>
					<div id="Amenity" class="FormContents">
						<div style="margin: auto;">
						<?php
							$amenitySQL = "SELECT * FROM AMENITY";
							$amenitySQLResult = mysqli_query($con, $amenitySQL);
						?>
						<table>
							<caption style="color: green; font-family: serif; font-size: 40px; font-weight: 600;">Amenities</caption>
							<tr>
								<th>Amenity ID</th>
								<th>Name</th>
								<th>Hourly Rate</th>
							</tr>
							<?php while(($cursor = mysqli_fetch_row($amenitySQLResult))) { 
								$var1 = $cursor[0];
								$var2 = $cursor[1];
								$var3 = $cursor[2];
							?>
							<tr>
								<td><?php echo "$var1"; ?></td>
								<td><?php echo "$var2"; ?></td>
								<td><?php echo "$" . "$var3"; ?></td>
							</tr>
							<?php } ?>
						</table>
						<?php 	
							$ServerName = "localhost:3306";
							$UserName = "ayush";
							$Password = "ayat15cs";
							$con = mysqli_connect($ServerName,$UserName,$Password);
							mysqli_select_db($con,"HotelDB");
						?>
						</div><br><br>
						<form method="post" action="Schedule_Amenity_action.php"  style="max-width: 50%;margin: auto;">
						<fieldset>
						<legend>Amenity Booking</legend>
						<p><label for="Cust_Id">Customer ID:</label> <input type="number" name="Cust_Id" value='<?php echo "$Cust_id"; ?>' id="Cust_Id" readonly="readonly" /></p>
						<p><label for="Amenity_Id">Amenity ID:</label> <input type="number" name="Amenity_Id" id="Amenity_Id" /></p>
						<p><label for="Time">Time requested (in hours):</label> <input type="number" name="Time" id="Time" /></p>
						<p class="LoginButton"><input value="Book" type="submit" class="center" /></p>
						</fieldset>
						</form>
					</div>
					<div id="Bills" class="FormContents">
						<br><br>
						<fieldset>
						<legend>Room Bill</legend>
						<?php 
							$procSQL = "CALL RoomBills('$Cust_id',@RoomCost)";
							$RBillResult = mysqli_query($con, $procSQL);
						?>
						<table>
							<tr>
								<th>Type</th>
								<th>Cost</th>
								<th>Days</th>
								<th>Total</th>
							</tr>
							<?php while(($cursor = mysqli_fetch_row($RBillResult))) { 
								$var1 = $cursor[0];
								$var2 = $cursor[1];
								$var3 = $cursor[2];
								$var4 = $cursor[3];
							?>
							<tr>
								<td><?php echo "$var1"; ?></td>
								<td><?php echo "$" . "$var2"; ?></td>
								<td><?php echo "$var3"; ?></td>
								<td><?php echo "$" . "$var4"; ?></td>
							</tr>
							<?php } ?>
						</table>				
						</fieldset>
						<br><br>
						<fieldset>
						<?php 	
							$ServerName = "localhost:3306";
							$UserName = "ayush";
							$Password = "ayat15cs";
							$con = mysqli_connect($ServerName,$UserName,$Password);
							mysqli_select_db($con,"HotelDB");
						?>
						<legend>Food Bill</legend>
						<?php 
							$procSQL = "CALL FoodBills('$Cust_id',@FoodCost)";
							$FBillResult = mysqli_query($con, $procSQL);
						?>
						<table>
							<tr>
								<th>Name</th>
								<th>Cost</th>
								<th>Quantity Ordered</th>
								<th>Total</th>
							</tr>
							<?php while(($cursor = mysqli_fetch_row($FBillResult))) { 
								$var1 = $cursor[0];
								$var2 = $cursor[1];
								$var3 = $cursor[2];
								$var4 = $cursor[3];
							?>
							<tr>
								<td><?php echo "$var1"; ?></td>
								<td><?php echo "$" . "$var2"; ?></td>
								<td><?php echo "$var3"; ?></td>
								<td><?php echo "$" . "$var4"; ?></td>
							</tr>
							<?php } ?>
						</table>
						</fieldset>
						<br><br>
						<fieldset>
						<?php 	
							$ServerName = "localhost:3306";
							$UserName = "ayush";
							$Password = "ayat15cs";
							$con = mysqli_connect($ServerName,$UserName,$Password);
							mysqli_select_db($con,"HotelDB");
						?>
						
						<legend>Amenities Bill</legend>
						<?php
							$procSQL = "CALL AmenityBills('$Cust_id',@AmenityCost)";
							$ABillResult = mysqli_query($con, $procSQL);
						?>
						<table>
							<tr>
								<th>Name</th>
								<th>Rate</th>
								<th>Duration</th>
								<th>Total</th>
							</tr>
							<?php while(($cursor = mysqli_fetch_row($ABillResult))) { 
								$var1 = $cursor[0];
								$var2 = $cursor[1];
								$var3 = $cursor[2];
								$var4 = $cursor[3];
							?>
							<tr>
								<td><?php echo "$var1"; ?></td>
								<td><?php echo "$" . "$var2"; ?></td>
								<td><?php echo "$var3" . " hours"; ?></td>
								<td><?php echo "$" . "$var4"; ?></td>
							</tr>
							<?php } ?>
						</table>
						</fieldset>
						<br><br>
						<fieldset>
						<?php 	
							$ServerName = "localhost:3306";
							$UserName = "ayush";
							$Password = "ayat15cs";
							$con = mysqli_connect($ServerName,$UserName,$Password);
							mysqli_select_db($con,"HotelDB");
						?>
						
						<legend>Total Bill</legend>
						<?php 
							$TotalRAFCostSQL="SELECT COST FROM TotalBillViewBase WHERE CUSTOMER_ID = '$Cust_id'";
							$result=mysqli_query($con, $TotalRAFCostSQL);	
							$rowset = mysqli_fetch_row($result);
							$RoomCost =$rowset[0];
							$rowset = mysqli_fetch_row($result);
							$FoodCost =$rowset[0];
							$rowset = mysqli_fetch_row($result);
							$AmenityCost =$rowset[0];
						?>
						<table>
							<tr>
								<th>Room</th>
								<td><?php echo "$" . "$RoomCost"; ?></td>
							</tr>
							<tr>
								<th>Food</th>
								<td><?php echo "$" . "$FoodCost"; ?></td>
							</tr>
							<tr>
								<th>Amenities</th>
								<td><?php echo "$" . "$AmenityCost"; ?></td>
							</tr>
							<tr>
								<th>GRAND TOTAL</th>
								<th><?php 
									  $procSQL = "CALL TotalBill('$Cust_id',@TotalCost)";
									  $TBillResult = mysqli_query($con, $procSQL);
									  $cursor = mysqli_fetch_row($TBillResult);
									  $var1 = $cursor[0];
									  echo "$" . "$var1"; ?></td>
							</tr>
						</table>
						</fieldset>
						<br><br>
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
	<footer>
		Made By: AYUSH HATE 1CR15CS036
	</footer>
</div>
</body>
</html>