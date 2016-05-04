<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";

	$dbname = "chart";

	$connection=mysqli_connect($server,$username,$password,$dbname);
		
		if($connection){
		
			return"Connect";
		}else{
			
			return"Failed";
	}

 ?>	