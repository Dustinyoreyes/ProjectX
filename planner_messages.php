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
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
   <title>CSS MenuMaker</title>
   <link rel="stylesheet" type="text/css" href="RegistrationFormCSS.css"></link>
</head>





<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', 'root', 'db_highcharts');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}


$truncate = "TRUNCATE TABLE Planner_Messages";

if ($dbLink->query($truncate)===TRUE) {
	



/*****
$sql = "CREATE TABLE Planner_Messages (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
MrpDate DATE,
Org varchar(40),
PlnrCd varchar(40),
Planner varchar(40),
ExCd varchar(40),
Exception varchar(40),
days varchar(40),
Item varchar(40),
Description varchar(40),
MakeBuy varchar(40),
xSignal varchar(40),
Buyer varchar(40),
SupplyType varchar(40),
xOrder varchar(40),
Quantity INT (15),
DueDate DATE,
FromDate DATE,
ToDate DATE, 
ExtCost varchar(40),
StdCst varchar(40),
Vendor varchar(40),
VendNum varchar(40)
)";

if ($dbLink->query($sql) === TRUE) {
	echo "Table Planner_Messages created successfully";
} else {echo "Error creating table: ". $dbLink->error;
}
 $dbLink->close();
***/

	
    $file = $_FILES['uploaded_file']['tmp_name'];
	$handle = fopen($file,"r");
	$c=0;
	
	
 while(($filesop = fgetcsv($handle,1000, ",")) !== false) {
 
$mrpdate = $filesop[0];
$org = $filesop[1];
$plnrdc = $filesop[2];
$planner = $filesop[3];
$excd = $filesop[4];
$exception = $filesop[5];
$days = $filesop[6];
$item = $filesop[7];
$description = mysqli_real_escape_string($dbLink,$filesop[8]);
$makebuy = $filesop[9];
$xsignal = $filesop[10];
$buyer = $filesop[11];
$supplytype = $filesop[12];
$xorder = $filesop[13];
$quantity = $filesop[14];
$duedate = $filesop[15];
$fromdate = $filesop[16];
$todate = $filesop[17];
$extcost = $filesop[18];
$stdcst = $filesop[19];
$vendor = $filesop[20];
$vendnum = $filesop[21];
 
 
 
  $query = "
            INSERT INTO Planner_Messages (
                 MrpDate, Org, PlnrCd, Planner, ExCd, Exception, days, Item, Description, MakeBuy, xSignal, Buyer, SupplyType, xOrder, Quantity, DueDate, FromDate, ToDate, ExtCost, StdCst, Vendor, VendNum				
            )
            VALUES (
               '{$mrpdate}', '{$org}', '{$plnrdc}', '{$planner}', '{$excd}', '{$exception}', '{$days}', '{$item}', '{$description}', 
				'{$makebuy}', '{$xsignal}', '{$buyer}', '{$supplytype}', '{$xorder}', '{$quantity}','{$duedate}', '{$fromdate}',
					'{$todate}','{$extcost}', '{$stdcst}', '{$vendor}','{$vendnum}'   
            )
			";
	$deletefirstrow = "DELETE FROM Planner_Messages WHERE id=1";		
  			
 
        // Execute the query
        $result = $dbLink->query($query);
		$headerRemoved = $dbLink->query($deletefirstrow);
 }
        // Check if it was successful
        if($result && $headerRemoved===TRUE) {
            echo 'Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        } 
 
}
 
// Close the mysql connection
    $dbLink->close();
 

 
 
?>

<p>
      <button class="btn btn-primary" onclick="location.href = 'http://localhost/projectx/worksheet2.php';" id="myHomeButton">Return home</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/worksheet2.php";
    };
</script>



