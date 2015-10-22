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
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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
<header id="header">
<div>
<h1 id="headtitle">Worksheet<h1>
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
   <li><a href='worksheet.php'><span id="Worksheet" class="glyphicon glyphicon-plane"></span> Worksheet</a></li>
   <li><a href='worksheet2.php'><span id="Worksheet2" class="glyphicon glyphicon-plane"></span> Worksheet2</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>




<div id="print">
<span class="glyphicon glyphicon-print"></span>
<button onclick="myFunction()" style="color:black" class="btn btn-default">Print this page</button>
<script src="printIcon.js">
</script>
</div>


<section id= "section">

<?php include "dbconfig_meggitt_inventory.php" ?>
  
 
 <?php 
$query = mysqli_query($dbLink,
"SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01F'
UNION 
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01G' 
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01X' 
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='01Y'
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='02P' 
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='04A' 
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='05C'
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='05M'
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='06C' 
UNION
SELECT SubPl,SUM(ExtCost),NOW() 
FROM `large_ytd_ship_detail` 
WHERE SubPl='06X'"
);





?>

      <table width="80%" class="table table-hover">
                <thead>
				<tr>
                    <td><b>SubPl</b></td>
                    <td><b>ExtCost</b></td>
					<td><b>Date</b></td>
                </tr>
				</thead>
<?php 
      // Print each file <button onclick='alertDelete()'  class='glyphicon glyphicon-remove'></button>
	     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){
?>
                <tr>
                    <td><?php echo $row['SubPl'];?></td>
                    <td><?php echo $row['SUM(ExtCost)'];?></td>
					<td><?php echo $row['NOW()'];?></td>
                </tr>
			
<?php } } else { ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
		</table>


<?php

//$string = file_get_contents("\wamp\www\ProjectX\userfile\ytd_ship_detail2.csv");
//echo $string;

?>

 
 
 
 
 
 
 
 </section>


</body>
</html>