<?php
	session_start();

	$id=$_POST['VN'];
	include 'adverify.php';
		$vtype=$_POST['vtype'];
		$vname=$_POST['vname'];
		$cc=$_POST['cc'];
		$milage=$_POST['milage'];
		$price=$_POST['price'];
		$contact=$_POST['contact'];
		$email=$_SESSION['email'];
		$availability=$_POST['availability'];
		$basefilepath="C:/xampp/htdocs/namodb/uploads/";

		
		if($error==0)
		{
			$filename1 = $_FILES['photo1']['name'];
			$tempname = $_FILES['photo1']['tmp_name'];     
	        $folder = $basefilepath.$filename1;
	        move_uploaded_file($tempname, $folder); 

	        $filename2 = $_FILES['photo2']['name'];
			$tempname = $_FILES['photo2']['tmp_name'];     
	        $folder2 = $basefilepath.$filename2;
	        move_uploaded_file($tempname, $folder2); 

	        $filename3 = $_FILES['photo3']['name'];
			$tempname = $_FILES['photo3']['tmp_name'];     
	        $folder3 = $basefilepath.$filename3;
	        move_uploaded_file($tempname, $folder3);

	        $filename4 = $_FILES['photo4']['name'];
			$tempname = $_FILES['photo4']['tmp_name'];     
	        $folder4 = $basefilepath.$filename4;
	        move_uploaded_file($tempname, $folder4); 
	          
	        $sql = "UPDATE vehicleinfo
	        SET vehiclename='$vname',cc='$cc',milage='$milage',price='$price',contact='$contact',vehicletype='$vtype',photo1='$filename1',
	        photo2='$filename2',photo3='$filename3',photo4='$filename4',availability='$availability'
	        where vehicleid='$id'";
			
			$query= mysqli_query($connect,$sql);
				if($query)
			{
				echo "data sucessfully updated";

	
				echo "<a href='viewmyad.php'>continue</a>";	
			}
			else
			{
?>
				failed to register<a href="editad.php?vehicleid=<?php echo $id?>">Try again</a>
<?php				
			}
		}
		else
		{
			echo "<a href='uploadad.php'>enter again error occured</a>";
		
		}
?>