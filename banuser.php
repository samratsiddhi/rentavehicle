<?php
	
	include 'connection.php';
	session_start();
	$bannedemail=$_POST['bannedemail'];

	$sql="SELECT * FROM userinfo where email='$bannedemail'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value)
	{
		if(strcmp($value['bannedaccount'],'no')==0)
	 	{	
	 		 $sql = "UPDATE userinfo
	        SET bannedaccount='yes' where email='$bannedemail'";
			
			$query= mysqli_query($connect,$sql);
			if($query)
			{
				echo "<br> user banned<br>";
				echo "<a href='adminviewsuser.php'>continue</a>";
			}

	 	}

	 	else
	 	{
	 		$sql = "UPDATE userinfo
	        SET bannedaccount='no' where email='$bannedemail'";
			
			$query= mysqli_query($connect,$sql);
			if($query)
			{
				echo "<br> user unbanned<br>";
				echo "<a href='adminviewsuser.php'>continue</a>";
			}

	 	}
	}
?>
