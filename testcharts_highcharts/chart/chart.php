<!DOCTYPE html>
<html>

<meta charset="UTF-8">

<head>
    <title>chart</title>
   

    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <body>
        <div id="container" style="min-width: 310px;  height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
        $(function() {
            $('#container').highcharts({
                title: {
                    text: 'Chart - Diaqram',
                    x: -20 //center
                },
                subtitle: {
                    text: 'X və Y -ə görə diaqram',
                    x: -20
                },
                xAxis: {
                    categories: [1,11,29,31,34	]
                },
                yAxis: {
                    title: {
                        text: 'Y - oxu dəyərləri'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'AZN'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'diaqram',
                    data: [1,11,55,56,58]
                }]
            });
        });
        </script>
    </body>

</html>

<?php
					include 'db.php';

    				$sql = "SELECT y FROM chart";

  					$query = mysqli_query($connection,$sql);
  
  					while($row=mysqli_fetch_assoc($query)){

    				 echo $row["y"];    				   
  					
  					};
	?>	

	 <?php 
 					include 'db.php';

    				$sql = "SELECT x FROM chart";

  					$query= mysqli_query($connection,$sql);
  
  					while($row=mysqli_fetch_assoc($query)){

    			 echo $row["x"];
  }
  ?>
