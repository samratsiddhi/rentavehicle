<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit your ad</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="global.css">
	</head>

</body>
</html>

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
				

				<body class="whole">
		<div class="heading">
			Update Your Ad
		</div>
	<section class="container-fluid bg">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container" method="post" action="updateinfo.php" enctype="multipart/form-data">
				  <div class="form-group">
				  	<table>
				  		<tr><td><b>Vehicle type</b></td></tr>
				  		<tr><td><select name="vtype" >
								  <option value="car">Car</option>
								  <option value="Moterbike">Moterbike</option>
								  <option value="Scooter">Scooter</option>
								</select>
				  		</td></tr>

					  	<tr><td><label><b>Vehicle Name</b></label></td></tr>
					  	<tr><td><input type="text" name="vname" value="<?php echo $vehiclename?>" required="required"></td></tr>
					
				   		<tr><td><b>cc</b></td></tr>
				   		<tr><td><input type="number" name="cc" value="<?php echo $cc?>" required="required"></td></tr>

				   		<tr><td><b>Milage</b></td></tr>
				   		<tr><td><input type="number" name="milage" value="<?php echo $milage?>" required="required"></td></tr>
					   						 
					    <tr><td><label><b>Price</b></label></td></tr>
					  	<tr><td><input type="number" name="price" value="<?php echo $price?>" required="required"></td></tr>

					  
					  
					   <tr> <td><label><b>Contact no</b></label></td></tr>
					   <tr><td> <input type="text" name="contact" value="<?php echo $contact?>" required="required"></td></tr>

					   <tr> <td><label><b>Available</b></label></td></tr>
					   <tr><td> <select name="availability" >
								  <option value="yes">yes</option>
								  <option value="no">no</option>
								</select></td></tr>

					    <tr><td> <label><b>Upload photo</b></label></td></tr>

					     <tr><td> <label><b>Front Side</b></label></td></tr>
						 <tr> <td><input type="file" name="photo1" value="<?php echo $photo1?>" accept="image/*" required="required"></ ></td></tr>

						 <tr><td> <label><b>Back Side</b></label></td></tr>
						 <tr> <td><input type="file" name="photo2" value="<?php echo $photo2?>" accept="image/*" required="required"></></td></tr>

						 <tr><td> <label><b>Left Side</b></label></td></tr>
						 <tr> <td><input type="file" name="photo3" value="<?php echo $photo3?>" accept="image/*" required="required"></></td></tr>

						 <tr><td> <label><b>Right Side</b></label></td></tr>
						 <tr> <td><input type="file" name="photo4" value="<?php echo $photo4?>" accept="image/*" required="required"></></td></tr>
					
					<br>

					
					 </table><br>

					  
					  
					  	<button type="submit" name="submit" value=<?php echo $id?> class="btn btn-primary btn-block">Update AD</button>
				</form>
			</section>
	
		</section>
		
	</section>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>




			

		

