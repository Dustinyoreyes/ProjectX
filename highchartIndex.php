

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'meggitt_inventory');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query($dbLink,
"SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01F'
UNION 
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01G' 
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01X' 
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01Y'
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='02P' 
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='04A' 
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='05C'
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='05M'
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='06C' 
UNION
SELECT SubPl,SUM(ExtCost) 
FROM `large_ytd_ship_detail` 
WHERE SubPl='06X'"

);
 while($row = mysqli_fetch_array($result)) {
	 $data[] = $row['SUM(ExtCost)'];
	 $subpl[] = $row['SubPl'];
 }

 
  
 
?>



<script>


    $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Total Amount per SubPl'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
					   //'01F', '01G', '01X','01Y','02P','04A','05C','05M','06C','06X'
					 '<?php echo implode("','", $subpl); ?>'
					  
                    ]
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
                    name: 'Total',
                    data: [<?php echo join($data, ',') ?>]
                }]
            });
        });
		
</script>		
		