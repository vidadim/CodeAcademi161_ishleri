<?php 

	include "db.php";
	
	$name = $_POST["user_name"];
	$surname = $_POST["user_surname"];
	$email = $_POST["user_email"];
	$pass = $_POST["pass"];



	$sql = "INSERT INTO users (user_name, user_surname, user_email, pass) VALUES ('$name','$surname','$email', '$pass')";


	$query = mysqli_query($connection,$sql);

	if($query){
		echo "elave olundu";
	}
	else{
		echo "xeta bash verdi!";
	}

header ("Location:index.php")


 ?>