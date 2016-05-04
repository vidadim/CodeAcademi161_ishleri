<?php 

	include "db.php";
	

	$name = "user_name";
	$surname ="user_surname";
	$lemail = $_POST["lemail"];
	$lpass = $_POST["lpass"];
	


	// $sql = "INSERT INTO users (user_email, pass) VALUES ('$lemail', '$lpass')";

	$sql = "INSERT INTO users (user_name, user_surname, user_email, pass) VALUES ('$name','$surname','$lemail', '$lpass')";

	$check="SELECT user_email, pass FROM users WHERE pass='$lpass' AND user_email='$lemail'";

	var_dump($check);


	$query = mysqli_query($connection,$sql);

	if($query){
		echo "elave olundu";
	}
	else{
		echo "xeta bash verdi!";
	}

header ("Location:admin_page.php")


 ?>