<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";

	$db_name = "sign";

	//mysqli_connect() - servere goshulmaq uchun lazim olan function
	//mysqli_select_db(connection,db_name)
	$connection = mysqli_connect($server,$username,$password);

	if($connection){
		$select_db = mysqli_select_db($connection,$db_name);
		if($select_db){
			echo "YES!Connected";
		}
		else{
			echo "Bad connection!";
		}
	}
	else{
		echo "servere qoshulma bash tutmadi! ";
	}

 ?>