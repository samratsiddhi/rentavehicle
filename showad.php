<?php
	session_start();
	include 'connection.php';

	if (isset($_SESSION['email']))
	{}
	else
	{
		header('location:loginpage.php');
	}
?>

<html>
<head>

	<title>My AD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<style type="text/css">
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


<!---------------------------------------------footer---------------------------------------------------------->
	</div>
			<footer class="footer-item">
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>				
			</footer>
	</body>

</body>
</html>
