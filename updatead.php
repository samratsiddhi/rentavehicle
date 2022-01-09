<html>

<head>
	<title>Upload ad</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
			<style type="text/css">
			html
			{
				height: 100%
			}

			
			body
			{
				min-height: 100%;
				display: flex;
				flex-direction: column;
			}

			input[type=file]
			{
				width: 80%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
				.footer-item h3
				{
					font-size:3vw;
				}
				.menu-item
				{
					font-size:1.5vw;
				}
				.footer-item p
				{
					font-size:1vw;
				}
			.area
			{
				padding: 15px;

			}
			.form-container
			{
				position: absolute;
				background: white;
				padding:30px;
				border-radius:10px;
				box-shadow: 0px 0px 10px 0px #000;
				margin-top: 10px;
			}
			h1
				{
					font-size: 60px;
					font-weight: 60px;
					text-align: center;
					margin-bottom:10px;
				}
			 	footer
			 	{
				   margin-top: auto;
				   background-color: #DCDCDC;
				   color: black;
				   text-align: center;
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


<?php
	include "connection.php"; 
	$id=$_GET['vehicleid'];

	$sql="SELECT * FROM vehicleinfo where vehicleid='$id'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value) 
	{
		$vehiclename=$value['vehiclename'];
		$cc=$value['cc'];
		$milage=$value['milage'];
		$contact=$value['contact'];
		$price=$value['price'];
		$photo1=$value['photo1'];
		$photo2=$value['photo2'];
		$photo3=$value['photo3'];
		$photo4=$value['photo4'];
		$availability=$value['availability'];
		
	
	}

?>
	<div class="body">				
				<div class="container-fluid bg" style="padding:20px;">
					<section class="row justify-content-center">
							<form class="form-container" method="post" action="updateinfo.php" enctype="multipart/form-data">
							  <div class="form-group">
							  	
							  		<h1>EDIT AD</h1>
							  		<table>
							  			<tr>
							  				<td class="area">
							  					<table>
											  		<tr><td><b>Vehicle type</b></td></tr>
											  		<tr><td><select name="vtype" >
															  <option value="car">Car</option>
															  <option value="Moterbike">Moterbike</option>
															  <option value="Scooter">Scooter</option>
															</select>
											  		</td></tr>
												  	<tr><td><label><b>Vehicle Name</b></label></td></tr>
												  	<tr><td><input class="form-control" type="text" name="vname" value="<?php echo $vehiclename?>" required="required"></td></tr>
												   		
												   	<tr><td><label><b>cc</b></label></td></tr>
												   	<tr><td><input class="form-control" type="Number" name="cc"  value="<?php echo $cc?>" required="required"></td></tr>

													<tr><td><label><b>Milage</b></label></td></tr>
											   		<tr><td><input class="form-control" type="Number" name="milage" value="<?php echo $milage?>" required="required"></td></tr>
												
												    <tr><td><label><b>Price per hour</b></label></td></tr>
												  	<tr><td><input class="form-control" type="Number" name="price" value="<?php echo $price?>" required="required"></td></tr>

												    <tr> <td><label ><b>Contact no</b></label></td></tr>
												    <tr><td> <input class="form-control" type="text" name="contact" value="<?php echo $contact?>" required="required"></td></tr>

												    <tr> <td><label><b>Available</b></label></td></tr>

					  								<tr>
						  								<td>
							  								<select name="availability" >
											  					<option value="yes">yes</option>
											  					<option value="no">no</option>
															</select>
														</td>
													</tr>				  						
							  					</table>
							  					
							  				</td>

							  				<td class="area">
							  					<table>
													<tr><td> <label><b>Upload photo</b></label></td></tr>

												    <tr><td> <label><b>Front Side</b></label></td></tr>
												  	<tr> <td><input type="file" name="photo1" value="<?php echo $photo1?>" accept="image/*" required="required"></ ></td></tr>

													<tr><td> <label><b>Back Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo2" accept="image/*"  value="<?php echo $photo2?>" required="required"></></td></tr>

													<tr><td> <label><b>Left Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo3" accept="image/*"  value="<?php echo $photo3?>" required="required"></></td></tr>

													<tr><td> <label><b>Right Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo4" accept="image/*"  value="<?php echo $photo4?>" required="required"></></td></tr>
													<input type="hidden" name="VN" value="<?php echo $id?>">
													<input type="hidden" name="availability" value="yes">			  						
							  					</table>
							  				</td>
							  			<tr>				
								</table><br>
								  <button type="submit" name="submit" class="btn btn-primary btn-block">Update AD</button>
							</form>	
					</section>
		</div>
	</div>
			<footer class="footer-item">
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>				
			</footer>
	</body>
</body>
</html>

