<?php 
	include "model.php";
	db::connOpen();
	$file 		=	$_FILES['file'];
	$target 	=	"uploads/";
	$name 		=	$file['name'];
	$size 		=	$file['size']/1024;
	$typearr	=	explode('/',$file['type']);
	$type 		=	$typearr[1];
	$imgpath 	=	$target.'file'.rand().".".$type;
	number_format($size, 2, '.', '');


	if(($file['size']<8388608) && ($size!=0)){
		$sql 	=	"INSERT INTO file_upload (name,size,extension,img_src) VALUES ('$name','$size','$type','$imgpath')";
		$lastId	=	mysql_insert_id(db::$connection);

		mysqli_query(db::$connection,$sql);

		move_uploaded_file($file['tmp_name'], $imgpath);
	}else{
		echo "File you selected exceeds limit";
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
	 	<title>File Upload</title>
	 		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<style type="text/css">
					progress {
					    display: block;
					    color: red;
					    border: 2px solid black;
					    border-radius: 5px;					   
					    box-sizing: border-box;
					    width: 300px;
					    height: 25px;
					    line-height: px;
					    font-size: 15px;
					    font-family: sans-serif;
					    text-align: center;
					}

					.btn-file {
				    position: relative;
				    overflow: hidden;
					}
					.btn-file input[type=file] {
				    position: absolute;
				    top: 0;
				    right: 0;
				    min-width: 100%;
				    min-height: 100%;
				    font-size: 100px;
				    text-align: right;
				    /* filter: alpha(opacity=0); */
				    opacity: 0;
				    outline: none;
				    background: white;
				    cursor: inherit;
				    display: block;
					}
					.flex{
					display:flex;
					flex-direction:column;
					align-items:center;

					}
					.box{
						background-color:lightcoral;
						color:white;
						padding:0;
						border-radius:5px;
					}
					.header{
						background-color:lightsalmon;
						height:60px;
						border-radius:5px;
						/* flex-direction:row; */

					}
					h1{
						margin:0;
						padding:0;
						line-height:60px;

					}
					.form-horizontal{
							line-height:50px;
					}
			
		</style>
 </head>
 <body>
 		<div class="main">
			<div class="container" style="margin-top: 20px">
				<div class="row">
					<div class="col-md-12 flex">
						<div class="col-md-6 box">
							<div class="header col-md-12">
								<h1>Upload files</h1>
							</div>
							
							<form class="form-horizontal" action=""  method="POST" enctype="multipart/form-data" >
								<div class="col-md-8">
								<span style="margin-right: 10px">
									Choose the file you want to upload
								</span>
								<span class="btn btn-default btn-file">
								    Browse... <input  name="file" type="file">
								</span>
						 		 </div>
						 		 <div class="form-group">
						    	<div class="col-md-4">
						      		<input  id="submit" type="submit" class="btn btn-default" value="Upload">
						    	</div>
						 		 </div>
							</form>
							 <progress class="flex" id="progress" value="0" max="300">
					        Загружено <span id="percent">0</span>%
					    </progress>
					    <p id="done"></p>
						</div>													
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					

					</div>
				</div>

			</div>
		</div>
 </body>
 </html>

 <script type="text/javascript">

 				// var submit = document.getElementById("submit");
 				// submit.addEventListener("click",changeProgress,false);
			 	var progress = document.getElementById('progress'),
			    percent 	 = document.getElementById('percent'),
			    done 		 = document.getElementById('done');
				// Old browser support
				if ( ! progress.value)
				    progress.value = +progress.getAttribute("value");
				if ( ! progress.max)
				    progress.max = +progress.getAttribute("max");

				function changeProgress() {
				
				    if (progress.value >= progress.max) {
				        done.innerHTML = "Готово!";
				        return;
				    }
				    progress.value++;
				    percent.innerHTML = Math.floor(progress.value / progress.max * 100);
				    setTimeout(changeProgress, 10);
				}
				
 </script>