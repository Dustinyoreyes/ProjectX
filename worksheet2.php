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
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
   <title>CSS MenuMaker</title>
</head>




<style>
table, th,td {
		border: 1px solid black;
		border-collapse: collapse;
}
th,td {
	padding: 5px;
}
</style>



<body id="body">
<header id="header"><h5><a style="float:right" id="logout" href="UserLogin.html"> Log Out</a></h5>
<div>
<h1 id="headtitle">Worksheet2<h1>
</div>



<!-- HTML for SEARCH BAR -->
	<div id="tfheader" style="color:black" class="panel panel-default">
		<form id="tfnewsearch" method="get" action="http://www.google.com/" target="_blank">
		        <input type="text" class="tftextinput" name="q" size="50" maxlength="130"><input type="submit" value="Search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
	
</header>

<aside id="asidemenu">
<div id='cssmenu'>
<ul>
   <li><a href="index.php"><span id="home" class="glyphicon glyphicon-home"></span> Home</a></li>
   <li class='active has-sub'><a href='#'><span id="fileupload" class="glyphicon glyphicon-file"></span> File Upload</a>
      <ul>
         <li class='has-sub'><span><a href="FileUploadNavDatabase.php">Upload to database</span></a>
            <!--
			<ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
			-->
			
         </li>
         <li class='has-sub'><span><a href="FileUploadNavLocal.php">Upload to local server</span></a>
            
			<!--
			<ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
			-->
         </li>
      </ul>
   </li>
   <li><a href='special.php'><span id="forminput" class="glyphicon glyphicon-list-alt"></span> Form Input</a></li>
   <li><a href='tasks.php'><span id="tasks" class="glyphicon glyphicon-tasks"></span> Tasks</a></li>
   <li><a href='downloads.php'><span id="downloads" class="glyphicon glyphicon-fire"></span> Downloads</a></li>
   <li><a href='worksheet.php'><span id="Worksheet" class="glyphicon glyphicon-star"></span> Worksheet</a></li>
   <li><a href='worksheet2.php'><span id="Worksheet2" class="glyphicon glyphicon-star"></span> Worksheet2</a></li>
   <li><a href='worksheet3.php'><span id="Worksheet3" class="glyphicon glyphicon-star"></span> Worksheet3</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>



<script type="text/javascript">

</script>


<section id= "section">

<div id="print">
<button onclick="myFunction()" style="color:black" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
<script src="printIcon.js">
</script>
</div>


<h2>Instructions for displaying data</h2>
<h4>1. Open excel file and normalize</h4> 
<h4>2. Save as a CSV file</h4> 
<h4>3. Upload "Inventory Report" (CSV Only)</h4>



<br>
    <form id="form" action="planner_messages.php" method="post" enctype="multipart/form-data">
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
include "dbconfig_planner_messages.php";

?>

<?php
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
?>

<!--Change ExtCost for the total sum to number/ or just clear all formatting-->









<br><br>

<table width="80%" class="table table-hover">
                <thead>
				<tr>
					<td><b></b></td>
                    <td style="text-align:center" class="planner1"><b>Orders to be cancelled</b></td>
					<td style="text-align:center" class="planner2"><b>Cancelled Cost</b></td>
                    <td style="text-align:center" class="planner1"><b>Orders to be rescheduled in</b></td>
					<td style="text-align:center" class="planner2"><b>Reschedule in Cost</b></td>
					<td style="text-align:center" class="planner1"><b>Orders to be rescheduled out</b></td>
					<td style="text-align:center" class="planner2"><b>Reschedule out Cost</b></td>
					<td style="text-align:center" class="planner3"><b>Total Count</b></td>
					<td style="text-align:center" class="planner3"><b>Total Cost</b></td>
                </tr>
				</thead>

<?php 
      // Print each file <button onclick='alertDelete()'  class='glyphicon glyphicon-remove'></button>
	     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){
?>
                <tr>
					<td style="text-align:center"><?php echo $row['Planner'];?></td>
                    <td style="text-align:center"><?php echo $row['Orders to be cancelled'];?></td>
					<td style="text-align:center"><?php echo $row['Cancelled Cost'];?></td>
					<td style="text-align:center"><?php echo $row['Orders to be rescheduled in'];?></td>
					<td style="text-align:center"><?php echo $row['Reschedule in Cost'];?></td>
					<td style="text-align:center"><?php echo $row['Orders to be rescheduled out'];?></td>
					<td style="text-align:center"><?php echo $row['Reschedule out Cost'];?></td>
					<td style="text-align:center"><?php echo $row['Total Count'];?></td>
					<td style="text-align:center"><?php echo $row['Total_Cost'];?></td>
                </tr>
			
<?php } } else { ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
		
		

				
				
				</table>
				
				
				
				
				

<br>
<?php

include "planner_messages_chart.php";


?>
<br><br>

<?php
include "planner_messages_barchart.php";
//include "highchartIndex.php";

?>
<br><br>
<?php

//include "highchartIndexLine.php";
//include "planner_messages_barchart.php";

?>

<?php

//include "highchartIndexSpecific.php";

?>
</section>


</body>
</html>