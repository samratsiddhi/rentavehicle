<html>
<head>
	<title>
		Detailed ad
	</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.3.css">
	<style>

	body
	{
		margin: 0;
		padding:0;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.ad
	{
		width: 1000px;
		height: 755px;
		border-radius: 10px;
		border:2px solid black;
		display: flex;
		margin-left: 500px;
		justify-content: center;
		margin-top: 45px;
		margin-bottom: 50px;

		
	}
	.slider
	{
		width: 70%;
		height: 80%;
		border-radius: 10px;
		overflow: hidden;
		float: left;
		margin-top: 20px;
	}

	.slides
	{
		width: 500%;
		height: 500px;
		display: flex;
	}

	.slides input
	{
		display:none;

	}

	.slide
	{
		width:20%;
		transition:2s;
	}

	.slide img
	{
		width: 700px;
		height: 500px;
		display: flex;
		justify-content: center;

	}

	.navigation-manual
	{
		position: absolute;
		width: 800px;
		margin-top: 520px;
		display: flex;
		margin-left: 275px;
	}

	.manual-btn
	{
		border:2px solid black;
		padding:5px;
		border-radius: 10px;
		cursor:pointer;
		transition: 1s;
	}

	.manual-btn:hover
	{
		background:black;
	}

	.manual-btn:not(:last-child)
	{
		margin-right: 40px;

	}

	#radio1:checked ~.first
	{
		margin-left:0; 
	}

	#radio2:checked ~.first
	{
		margin-left:-20%; 
	}

	#radio3:checked ~.first
	{
		margin-left:-40%; 
	}

	#radio4:checked ~.first
	{
		margin-left:-60%; 
	}

	table{
		display: flex;
		margin-top: 600px;
		margin-left: -500px;
		font-family: Georgia, Source Sans Pro;
		font-size: 25px;
	}
	.menuitem-wf a{
			text-decoration: none;
		}
		.menubar{
			width: 100%;
		}
		footer{
			width: 100%;
		}
	</style>

</head>
<body>
	<div class="menubar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="col col-lg-3 menuitem-wf">
				<a href="homepage.php"><h5>HOME</h5></a>
			</div>
			<div class="col col-lg-3 menuitem-wf">
				<a href="aboutus.php"><h5>ABOUT US</h5></button></a>
			</div>
			<div class="col col-lg-3 menuitem-wf">
				<a href="contactus.php"><h5>CONTACT US</h5></a>
			</div>
			<div class="col col-lg-3 menuitem-wf">
				<a href="logout.php"><h5>LOGOUT</h5></a>
			</div>
		</nav>


	<?php
	session_start();
	include "connection.php"; 
	$id= $_GET['vehicleid'];
	

	//getting user name of the ad poster

	$sql="SELECT email FROM vehicleinfo where vehicleid=$id";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value)
	{
		$email=$value['email'];	
	}	


    $sql="SELECT email,username FROM userinfo";
    $query=mysqli_query($connect,$sql);
    $match=0;

    while ($row=mysqli_fetch_assoc($query))
    {
    	if($row['email']==$email)
    	{
    		$username=$row['username'];
    		break;
    	}
	}


	//geting all photos and details of the ad
	$basefilepath="uploads/";
	$sql="SELECT * FROM vehicleinfo where vehicleid='$id'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value) {
	?>

					<div class="ad">
						<div class ="slider">
							<div class="slides">
								<input type="radio" name="radio-btn" id="radio1">
								<input type="radio" name="radio-btn" id="radio2">
								<input type="radio" name="radio-btn" id="radio3">
								<input type="radio" name="radio-btn" id="radio4">

								<div class="slide first">
									<img src="<?php echo $basefilepath.$value['photo1'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo2'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo3'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo4'];?>">
								</div>

								<div class="navigation-auto">
									<div class="btn1"></div>
									<div class="btn2"></div>
									<div class="btn3"></div>
									<div class="btn4"></div>
								</div>

								<div class="navigation-manual">
									<label for="radio1" class="manual-btn"></label>
									<label for="radio2" class="manual-btn"></label>
									<label for="radio3" class="manual-btn"></label>
									<label for="radio4" class="manual-btn"></label>
								</div>
							</div>
										
						</div>	

						<div class="info">
							<table>
								<tr><td>Vehicle name</td><td>:</td><td><?php echo $value['vehiclename'];?></td></tr>
								<tr><td>CC</td><td>:</td><td><?php echo $value['cc'];?></td></tr>
								<tr><td>Posted by</td><td>:</td><td><?php echo $username;?></td></tr>
								<tr><td>Email</td><td>:</td><td><?php echo $value['email'];?></td></tr>
								<tr><td>Contact number</td><td>:</td><td><?php echo $value['contact'];?></td></tr>
							</table>

						</div>
					</div>
<?php
	}
?>			
<!------------------------------------------------------------------------------footer start------------------------------------------------------------------------------->
			<footer>
			  <p>© 2021 Copyright:<a style="color: black;" class="footerlink" href="homepage.php">www.rentavehicle.com</a></p>
			  <h3>Rent A Vehicle</h3>
				
			</footer>
<!------------------------------------------------------------------------------footer 
</body>
</html>