	<?php 
							$sql2 = "SELECT imgpath FROM file_upload WHERE id='$lastId'";
							$path = mysqli_query(db::$connection,$sql2)[0];
							echo "<img src='$path'>";
						 ?>