<?php
	session_start();
	include 'connection.php';

?>

<html>
<head>

	<title>My AD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<style type="text/css">
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
<h1 style="margin-top: 30px;">AVAILABLE VEHICLES</h1>

<table class="info-table">
	<tr>
		<th>Vehicle Name</th>
		<th>cc</th>
		<th>Milage</th>
		<th>Price</th>
		<th>Contact</th>
		
		<th>Images</th>		
	</tr>

<?php 
	$vehicletype=$_POST['vehicletype'];
	$basefilepath="uploads/";
	$sql="SELECT * FROM vehicleinfo";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value)

	 {
	 	if(strcmp($value['availability'],'yes')==0 && $value['vehicletype']==$vehicletype)
	 	{

?>
				<tr>
					<td><?php echo $value['vehiclename'];?></td>
					<td><?php echo $value['cc'];?></td>
					<td><?php echo $value['milage'];?></td>
					<td><?php echo $value['price'];?></td>
					<td><?php echo $value['contact'];?></td>
					
						
					<td>
					<div id ="slider">
					<figure>	
							<image src="<?php echo $basefilepath.$value['photo1'];?>" height="100" width="100"><br>
							 <a href="slider.php?vehicleid=<?php echo $value['vehicleid']?>"> view more</a>
					</figure>
					</td>	
				</tr> 
				
			
<?php			
		}
	}
?>
</table>


<!---------------------------------footer-------------------------------------------------->

	</div>
			<footer class="footer-item">
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>				
			</footer>
	</body>

</body>
</html>