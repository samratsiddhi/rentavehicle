<?php
	session_start();
	include 'connection.php';

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>aboutus</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">

	<style type="text/css">
		.description-wrapper
		{
			margin: auto;
			height: auto;
			width: 80%;
		}
		p
		{
			text-align: center;
			font-size: 20px;
		}
		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
		}	

		.menu-item
		{
			font-size:1.5vw;
		}
		.menuitem-wf a{
			text-decoration: none;
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
<div class="description-wrapper">
	<h1 style="padding:40px;">ABOUT US</h1>
	<p>In Today’s world vehicles are one of the important medium for travelling from one place to
another. Regardless of where you live, what type of lifestyle you lead, work you do or other
factors, vehicles are highly important.
This online rental vehicle system is a website that provides a way for people to rent a vehicle
when required easily for affordable and reasonable price. This online vehicle system is created
with the idea of letting people who own vehicle but are not going to use them for a while. So
now they can put their vehicle up for rent and rent it out to another person who wants to rent the
vehicle. Through this system people renting out their vehicle can make some extra cash whereas
the person hiring the vehicle gets to hire a vehicle for affordable price.
Using an online website means it is accessible by everyone at any given moment making it much
easier for the customers to make a reservation. Using such technology will make the business
process much easier for the people looking to rent their vehicle and the people who want to rent a
vehicle.</p>
</div>
<!---------------------------------------footer---------------------------------------------------------------->
	</div>
			<footer class="footer-item">
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>				
			</footer>
	</body>

</body>
</html>
