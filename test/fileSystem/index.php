<?php 
	include "model.php";
	//db::connOpen();

	//db::connClose();
	//
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
	<div class="main">
			<div class="container" style="margin-top: 20px">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" action="file.php"  method="POST">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">File</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputEmail3" name="f_name">
						    </div>
						  </div>
						  <label for="select" class="col-sm-2 control-label">File Extension</label>
						  <select id="select" class="pull-right form-control" style=" width:948px" name="f_extension">
							  <option value=".txt">.txt</option>
							  <option value=".html">.hmtl</option>
							  <option value=".css">.css</option>
							  
							</select>
						  
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default" style="margin-top: 10px">Add file</button>
						    </div>
						  </div>
						</form>
												
					</div>
				</div>
			</div>
		</div>	
</body>
</html>

