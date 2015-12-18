 <!DOCTYPE html>
<head>
   <title>MySQL file upload example</title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
   <title>CSS MenuMaker</title>
</head>

<body id="body">

<style>
table, th,td {
		border: 1px solid black;
		border-collapse: collapse;
}
th,td {
	padding: 5px;
}
</style>



<div id="load" style="display:none;">Loading... Please wait
<img id="loadIcon" src="http://i.imgur.com/sOX1GUR.gif" alt=""/></div>
<header id="header"><h5><a style="float:right" id="logout" href="UserLogin.html"> Log Out</a></h5>
<div>
<h1 id="headtitle">Cables<h1>
</div>


<section id= "section">





<script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
	},
show:function(el)
	{
		this.getID(el).style.display='';
	},
getID:function(el)
	{
		return document.getElementById(el);
	}
}

</script>




<br>
    <form id="form" action="cablesToCsv.php" onsubmit="return ray.ajax()" onclick="return loading()" method="post" enctype="multipart/form-data">
        <h4><h4>
		<input type="file" name="uploaded_file" id="file" required="required"><br>
		<input type="submit" name="Upload_File" value="Upload File" id="submit" required="required">
	</form>
<br>


<!--
<p>
<a href="list_files.php">See all files</a>
</p>
</div>
-->

<?php
//include "dbconfig_planner_messages.php";

?>


<?php

/****

$query = mysqli_query($dbLink,
"SELECT
  Planner,

COUNT(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be cancelled'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'
) 
THEN Exception ELSE NULL END) AS 'Orders to be cancelled',


CONCAT('$',FORMAT(SUM(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be cancelled'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN ExtCost ELSE NULL END),0)) AS 'Cancelled Cost',



COUNT(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be rescheduled in'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'
) 
THEN Exception ELSE NULL END) AS 'Orders to be rescheduled in',





CONCAT('$',FORMAT(SUM(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be rescheduled in'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN ExtCost ELSE NULL END),0)) AS 'Reschedule in Cost',




COUNT(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be rescheduled out'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN Exception ELSE NULL END) AS 'Orders to be rescheduled out',


CONCAT('$',FORMAT(SUM(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND Exception='Orders to be rescheduled out'
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN ExtCost ELSE NULL END),0)) AS 'Reschedule out Cost',



COUNT(
CASE WHEN(
days NOT BETWEEN 1 AND 7
AND days NOT BETWEEN -7 AND -1
AND SupplyType='Discrete job'
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN Exception ELSE NULL END) AS 'Total Count',


CONCAT('$',FORMAT(SUM(
CASE WHEN(

SupplyType='Discrete job'
AND days NOT BETWEEN -7 AND -1
AND days NOT BETWEEN 1 AND 7
AND xSignal NOT LIKE '%DCI%'
AND xSignal NOT LIKE '%KB%'
AND xSignal NOT LIKE '%KB-PRESS%'
AND xSignal NOT LIKE '%VM%'

) 
THEN ExtCost ELSE NULL END),0)) AS 'Total_Cost'



FROM
  planner_messages

GROUP BY Planner
"
);


***/
?>

<!--Change ExtCost for the total sum to number/ or just clear all formatting-->
<!----


SET @sql_text = Concat(
"Select 'MrpDate', 'Org', 'PlnrCd', 'Planner', 'ExCd', 'Exception', 'days', 'Item', 'Description', 'MakeBuy', 'xSignal', 'Buyer', 'SupplyType', 'xOrder', 'Quantity', 'DueDate', 'FromDate', 'ToDate', 'ExtCost', 'StdCst', 'Vendor', 'VendNum' 
UNION ALL SELECT MrpDate, Org, PlnrCd, Planner, ExCd, Exception, days, Item, Description, MakeBuy, xSignal, Buyer, SupplyType, xOrder, Quantity, DueDate, FromDate, ToDate, ExtCost, StdCst, Vendor, VendNum 
FROM Planner_messages 
Into Outfile 'c:/wamp/www/ProjectX/PlannerMessagesDumpFile/", DATE_FORMAT( NOW(), '%m-%d-%Y'), ".csv'   FIELDS ENCLOSED BY \'\"\' TERMINATED BY \',\' ESCAPED BY \'\"\' LINES TERMINATED BY '\n' " );


PREPARE s1 FROM @sql_text;
Execute s1;
drop prepare s1;


---->



	

</section>


</body>
</html>