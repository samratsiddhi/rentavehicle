<?php
// Start the session
session_start();


// Set session variables
include ('connection.php');
$email=$_POST['email'];
$pword=$_POST['pword'];

	$sql="SELECT userid FROM userinfo WHERE email=$email";
	$query=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($query);

	echo '$row[userid]';



/*


			$_SESSION["uname"] = $email;
			$_SESSION["userid"] = $row['userid'];
			echo "Session variables are set.";

			*/
?>

