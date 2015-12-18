 <!DOCTYPE html>
<head>
   <title>MySQL file upload example</title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="/css/normalize.css?update_06092015"/>
   <link rel="stylesheet" href="styles.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <title>CSS MenuMaker</title>
   <link rel="stylesheet" type="text/css" href="RegistrationFormCSS.css"></link>
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
   <li><a href='downloads.php'><span id="downloads" class="fa fa-download"></span> Downloads</a></li>
   <li><a href='worksheet.php'><span id="Worksheet" class="fa fa-table"></span> Worksheet</a></li>
   <li><a href='worksheet2.php'><span id="Worksheet2" class="fa fa-bar-chart"></span> Worksheet2</a></li>
   <li><a href='worksheet3.php'><span id="Worksheet3" class="glyphicon glyphicon-star"></span> Worksheet3</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>




<div id="print">
<button onclick="myFunction()" style="color:black" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
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
<br><br>

<!--
<script type="text/javascript">
$(function() {

    var loading = function() {
        // add the overlay with loading image to the page
        var over = '<div id="overlay">' +
            '<img id="loading" src="http://bit.ly/pMtW1K">' +
            '</div>';
        $(over).appendTo('body');

        // click on the overlay to remove it
        $('#overlay').click(function() {
           $(this).remove();
        });

        // hit escape to close the overlay
        $(document).keyup(function(e) {
            if (e.which === 27) {
                $('#overlay').remove();
            }
        });
    };

    // you won't need this button click
    // just call the loading function directly
    $('button').click(loading);

});
</script>
-->


<br><br>


<!--
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Trigger Modal in iFrame</button>


<br><br>
<form method="post">

<input type="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></input>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<br>
      </div>
	  
      <div class="modal-body">
           <h4 class="modal-title" id="myModalLabel">You Have Successfully Registered</h4>
      </div>
      
	  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

</div>
						
						
 </form>
 -->
 
 
 
 
 <br><br><br>
 <!--
 <script>
 $('#submitBtn').click(function() {
     $('#lname').html($('#lastname').val());
     $('#fname').html($('#firstname').val());
});

$('#submit').click(function(){
    alert('submitting');
    $('#formfield').submit();
});
 
 
 </script>
 
 
 
 <form role="form" id="formfield" action="inc/Controller/OperatorController.php" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();">
<input type="hidden" name="action" value="add_form" /> 

       <div class="form-group">
         <label>Last Name</label><span class="label label-danger">*required</span>
         <input class="form-control" placeholder="Enter Last Name" name="lastname" id="lastname">
       </div>

        <div class="form-group">
          <label>First Name</label><span class="label label-danger">*required</span>
          <input class="form-control" placeholder="Enter First Name" name="firstname" id="firstname">
       </div>

            <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" />
  <input type="button" name="btn" value="Reset" onclick="window.location='fillup.php'" class="btn btn-default" data-modal-type="confirm"/>
</form>

<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirm Submit
            </div>
            <div class="modal-body">
                Are you sure you want to submit the following details?
                <table class="table">
                    <tr>
                        <th>Last Name</th>
                        <td id="lname"></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td id="fname"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" id="submit" class="btn btn-success success">Submit</a>
            </div>
        </div>
    </div>
</div>
 
 <br><br>
 
 -->

 
 
 </section>


</body>
</html>