<!DOCTYPE html>
<html>
<head>
	<title>Search AD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<style type="text/css">

		.menuitem-wf a{
			text-decoration: none;
		}
		.search-box
		{
			display: flex;
			justify-content: center;
			margin-top: 30vh;
			padding: 50px;

		}
		fieldset
		{
			padding: 30px;
			border: 1px solid #A0A0A0;
			box-shadow: 5px 5px #707070;
		}
		h3
		{
			text-align: center;
		}
		select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		button {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}
		.menu-item
		{
			font-size:1.5vw;
		}
		.footer-item p
		{
			font-size:1vw;
		}
		.footer-item h3
		{
			font-size:3vw;
		}

		button:hover {
		  background-color: #45a049;
		}
		h4{
			font-family: "Times New Roman", Times, serif;
		}
	</style>	
</head>
<body>

		<!-----------------navbar------------------------->
	<div class="menubar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="col col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="homepage.php"><h5 class="menu-item">HOME</h5></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="aboutus.php"><h5 class="menu-item">ABOUT US</h5></button></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="contactus.php"><h5 class="menu-item">CONTACT US</h5></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="logout.php"><h5 class="menu-item">LOGOUT</h5></a>
			</div>
		</nav>
  	</div>
<!-----------------end of navbar------------------------->  


	<form class="search-box" action="searchedad.php" method="post">
		<fieldset>
			<h4>Search Vehicle</h4>
			<label>Vehicle Type:</label>
						<select name="vehicletype" >
							<option value="car">Select vehicle type</option>
						  <option value="car">Car</option>
						  <option value="Moterbike">Moterbike</option>
						  <option value="Scooter">Scooter</option>
						</select>
			<button type="submit">search</button>
		</fieldset>
	</form>	

<!-------------------------------------footer------------------------------------------------------------------------->
	</div>
			<footer>
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>				
			</footer>
	</body>	
</body>
</html>