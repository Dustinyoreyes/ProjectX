

<div id="container4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', 'root', 'db_highcharts');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query($dbLink,


"SELECT
  Planner,
COUNT(
CASE WHEN(
days NOT BETWEEN -7 AND -1
AND 
days NOT BETWEEN 1 AND 7
AND
SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'
) 
THEN Planner ELSE NULL END) AS 'TOTAL'

FROM
  planner_messages

GROUP BY Planner
"

);
 while($row = mysqli_fetch_array($result)) {
	 $data3[] = $row['TOTAL'];
	 $planner[] = $row['Planner'];

 }

 
  
 
?>



<script>


    $(function () {
            $('#container4').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Planner Messages'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
					   //'01F', '01G', '01X','01Y','02P','04A','05C','05M','06C','06X'
					 '<?php echo implode("','", $planner); ?>'
					  
                    ]
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Number of Messages'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
                    name: 'Total Count',
                    data: [<?php echo join($data3, ',') ?>]
                }]
            });
        });
		
</script>		
		