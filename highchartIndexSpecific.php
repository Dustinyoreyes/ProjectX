


<div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'meggitt_inventory');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query($dbLink,
'SELECT planner, SUM(Month_ExcessIncomingValue) 
FROM `excess_material` 
WHERE Planner="Cochran"
UNION 
SELECT planner, SUM(Month_ExcessIncomingValue)
FROM `excess_material` 
WHERE Planner="Flores"
');
 while($row = mysqli_fetch_array($result)) {
	 $data3[] = $row['SUM(Month_ExcessIncomingValue)'];
 }

?>
	
		

<script>

    $(function () {
    $('#container3').highcharts({
		chart: {
                    type: 'column'
                },
        xAxis: {
            type: 'text',
			categories: [
					 'Cochran', 'Flores'  
                    ]
        },
		yAxis: {
            min: 0,
            title: {
            text: 'Excessive Material Value($)'
                    }
                },
		title: {
			text: 'Planner'
		},
		//remove highcharts.com
		credits: {
				enabled: false
                  },
        series: [{
			name: 'Total',
            data: [<?php echo join($data3, ',') ?>],
        }]
    });
});
		
</script>		
		