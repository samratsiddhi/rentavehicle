<?php

	$server="localhost";
	$username="root";
	$password="";
	$dbname="naya";


	$connect=mysqli_connect($server,$username,$password,$dbname);
	//mysqli_select_db($connect,'vehicledatabase');

	if (!$connect)
	{
		die("connection failed".mysqli_connect_error());
	}



?>