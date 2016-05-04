<?php 	
include 'db.php';
   	$sql = "SELECT * FROM chart";

  	$query = mysqli_query($connection,$sql);
  

 ?>
<!DOCTYPE html>
<html>

<meta charset="UTF-8">

<head>
    <title>chart</title>
   

    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <body>
        <!-- <div id="container" style="min-width: 310px;  height: 400px; margin: 0 auto"></div>
 -->
        <div id="container" style="min-width: 310px; height: 400px; max-width: 700px; margin: 0 auto"></div>


        <script type="text/javascript">
        	$(function () {
			    $('#container').highcharts({
			        chart: {
			            type: 'scatter',
			            margin: [70, 50, 60, 80],

			            // events: {
			            //     click: function (e) {
			            //         // find the clicked values and the series
			            //         var x = e.xAxis[0].value,
			            //             y = e.yAxis[0].value,
			            //             series = this.series[0];

			            //         // Add it
			            //         series.addPoint([x, y]);

			            //     }
			            // }
			        },
			        title: {
			            text: 'X - Y diaqramı'
			        },
			        // subtitle: {
			        //     text: 'Click the plot area to add a point. Click a point to remove it.'
			        // },
			        xAxis: {
			            gridLineWidth: 1,
			            minPadding: 0.2,
			            maxPadding: 0.2,
			            maxZoom: 60
			        },
			        yAxis: {
			            title: {
			                text: 'Value'
			            },
			            minPadding: 0.2,
			            maxPadding: 0.2,
			            maxZoom: 60,
			            plotLines: [{
			                value: 0,
			                width: 1,
			                color: '#808080'
			            }]
			        },
			        legend: {
			            enabled: false
			        },
			        exporting: {
			            enabled: false
			        },
			        plotOptions: {
			            series: {
			                lineWidth: 1,
			                point: {
			                    // events: {
			                    //     'click': function () {
			                    //         if (this.series.data.length > 1) {
			                    //             this.remove();
			                    //         }
			                    //     }
			                    // }
			                }
			            }
			        },
			        series: [{


			            data: [

			            // [0, 0], 
			            // [100, 200], 
			            // [200, -400], 
			            // [330,880]

			            <?php 	

			        	  	while($row=mysqli_fetch_assoc($query)){

							    echo "[".$row["x"].",".$row['y']."],";   
	 						   	  
						}		

			             ?>

			            ]
			        }]
			    });
			});
        </script>
    </body>

</html>


