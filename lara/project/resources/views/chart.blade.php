<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>bu da chart </p>
</body>
</html>

<?php

$lava->LineChart('Title', $DataTable, [
    'axisTitlesPosition' => 'string',
    'curveType'          => 'string',
    'hAxis'              => [1,2,3],   //HorizontalAxis Options
    'interpolateNulls'   => bool,
    'lineWidth'          => int,
    'pointSize'          => int,
    'vAxis'              => [5,6,7],   //VerticalAxis Options
]);

?>
