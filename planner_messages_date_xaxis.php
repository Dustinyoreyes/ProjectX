

<div id="container5" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', 'root', 'db_highcharts');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query($dbLink,
"
SELECT MrpDate,

SUM(
CASE WHEN(

SupplyType='Discrete job'
AND days NOT BETWEEN -7 AND -1
AND days NOT BETWEEN 1 AND 7
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'
) 
THEN ExtCost ELSE NULL END) AS 'Total_Cost'

FROM
  planner_messages

"

);
 while($row = mysqli_fetch_array($result)) {
	 $data4[] = $row['Total_Cost'];
	 $planner[] = $row['MrpDate'];
 }

 
  
 
?>



<script>


    $(function () {
	
            $('#container5').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Total Cost of Messages'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'datetime',
					
					
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Amount ($)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>${point.y:.1f}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
				//remove highcharts.com
				credits: {
				enabled: false
                  },
				
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
					pointStart: Date.UTC(2015, 11, 1),
					pointInterval: 1000 * 60 * 60 * 60,
                    name: 'Total',
                    data: [<?php echo join($data4, ',') ?>,<?php echo join($data4, ',') ?>,<?php echo join($data4, ',')?>]
                }]
            });
        });
		
</script>		
		