


<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'db_highcharts');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query($dbLink,'select * from sales order by id');
 while($row = mysqli_fetch_array($result)) {
	 $data2[] = $row['amount'];
 }

?>



<script>

    $(function () {
    $('#container2').highcharts({
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
            day: '%b. %e'
			},
			title: {
                text: 'Date'
            }
        },
		yAxis: {
            min: 0,
            title: {
            text: 'Amount ($)'
                    }
                },
		title: {
			text: 'Line Chart Test'
		},
		//remove highcharts.com
		credits: {
				enabled: false
                  },
        series: [{
			name: 'Total',
            data: [<?php echo join($data2, ',') ?>],
			pointStart: Date.UTC(2015, 9, 10),
            pointInterval: 24 * 3600 * 1000 // one day
        }]
    });
});
		
</script>		
		