<?php 
	include "model.php";

	$f_name = $_POST['f_name'];
	$f_extension = $_POST['f_extension'];

	$file = new File($f_name,$f_extension);
	db::connOpen();
	echo fwrite($file,"Hello World. Testing!");
	$sql = "INSERT INTO files (f_name,f_extension,f_path) VALUES ('$file->f_name','$file->f_extension','$file->f_path')";
 	mysqli_query(db::$connection,$sql);
 ?>