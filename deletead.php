<?php
	include "connection.php";

	$id=$_GET['vehicleid'];
	$sql="DELETE FROM vehicleinfo where vehicleid=$id";

	$query=mysqli_query($connect,$sql);

			if($query)
			{
				header('location:viewmyad.php');
			}
			else
			{
				echo("fail  to delete"."<br>"."<a href='viewad.php'> again</a>");
			}	 
?>