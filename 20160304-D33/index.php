
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style type="text/css">
		
		</style>
	</head>
	<body>
	
	<?php
	$myArray=["ad"=>"Vidadi","soyad"=>"Gəncəli","yas"=>"100-e ne qaldi ;-) ..."];

	$stud=[
	["AY","xan",20],
	["AYGUN","Xoxan",25],
	["Gun","Can",22]
	];

	$stud2=[
	"stud0"=>["AY","xan",20],
	"stud1"=>["AYGUN","Xoxan",25],
	"stud2"=>["Gun","Can",22]
	];


	// for($i=0; $i<count($stud);$i++){
	// 	echo $stud[$i][0]." ".$stud[$i][1]." ".$stud[$i][2];
	// }

	// echo "<br>";

	// foreach ($stud2 as $key => $value) {
	// 	for ($i=0; $i < count($value); $i++) { 
	// 		echo $value[$i];
	// 	}
	// 	echo "<br>";
	// }


	$i=0;
	$j=0;

	while ( $i<= count($stud)) {
		
		while ( $j <= count($stud[$i]) ) {
			echo $stud[$i][$j];
			$j++;
			if($j >= count($stud[$i]) ){
				$j=0;
				break;
			}
		}

		$i++;
		if($i==count($stud)){
			break;
		}


	}

	?>

<!-- <table border="1">
	<tr>
		<td>AD</td>
		<td>Soyad</td>
		<td>Yas</td>
	</tr>
	<tr>
		<td>
		<?php
		// echo $myArray["ad"];
		?>
		</td>
		<td>
		<?php
		// echo $myArray["soyad"];
		?>
		</td>
		<td><?php
		// echo $myArray["yas"];
		?>

		</td>
	</tr>
</table> -->

	</body>
	</html>