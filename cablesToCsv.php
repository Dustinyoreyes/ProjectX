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


//$truncate = "TRUNCATE TABLE Planner_Messages";

//if ($dbLink->query($truncate)===TRUE) {
	



/***
$sql = "CREATE TABLE Cables (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
GLClass varchar(40),
xCustomer varchar(40),
CommodityClass varchar(40),
BookingType varchar(40),
DomFor varchar(40),
ContractAdministrator varchar(40),
PO_num varchar(40),
OrderNum varchar(40),
LineNum varchar(40),
PartNum varchar(40),
Description varchar(40),
ShipDate DATE,
DockDate DATE,
StockDate DATE,
OrderQty INT (15),
ExtendedAmount varchar(40),
ExtendedCost varchar(40),
HoldDesc varchar(40), 
PickSlip varchar(40),
Expedite_Code varchar(40),
PlannerNum varchar(40),
GLClass2 varchar(40)
)";

if ($dbLink->query($sql) === TRUE) {
	echo "Table Cables created successfully";
} else {echo "Error creating table: ". $dbLink->error;
}
 $dbLink->close();
**/

	
    $file = $_FILES['uploaded_file']['tmp_name'];
	$handle = fopen($file,"r");
	$c=0;
	
	
 while(($filesop = fgetcsv($handle,1000, ",")) !== false) {
 
 
$GLClass = $filesop[1];
$xCustomer = $filesop[2];
$CommodityClass = $filesop[3];
$BookingType = $filesop[4];
$DomFor = $filesop[5];
$ContractAdministrator = $filesop[6];
$PO_num = $filesop[7];
$OrderNum = $filesop[8];
$LineNum = $filesop[9];
$PartNum = $filesop[10];
$Description = $filesop[11];
$ShipDate = $filesop[12];
$DockDate = $filesop[13];
$StockDate = $filesop[14];
$OrderQty = $filesop[15];
$ExtendedAmount = $filesop[16];
$ExtendedCost = $filesop[17];
$HoldDesc = $filesop[18];
$PickSlip = $filesop[19];
$Expedite_Code = $filesop[20];
$PlannerNum = $filesop[21];
$GLClass2 = $filesop[22];
 

 
  $query = "
			INSERT INTO Cables (
                 GLClass, xCustomer, CommodityClass, BookingType, DomFor, ContractAdministrator, PO_num, OrderNum, LineNum, PartNum , Description, ShipDate, DockDate, StockDate, OrderQty, ExtendedAmount, ExtendedCost, HoldDesc, PickSlip, Expedite_Code, PlannerNum, GLClass2				
            )
            VALUES (
               '{$GLClass}', '{$xCustomer}', '{$CommodityClass}', '{$BookingType}', '{$DomFor}', '{$ContractAdministrator}', '{$PO_num}', '{$OrderNum}', '{$LineNum}', 
				'{$PartNum}', '{$Description}', '{$ShipDate}', '{$DockDate}', '{$StockDate}', '{$OrderQty}','{$ExtendedAmount}', '{$ExtendedCost}',
					'{$HoldDesc}','{$PickSlip}', '{$Expedite_Code}', '{$PlannerNum}','{$GLClass2}'   
            )
			
			";
	//$deletefirstrow = "DELETE FROM Cables WHERE id=1";		
  			
    //$createTable = "CREATE TABLE IF NOT EXISTS newtable LIKE Planner_Messages;";
	//$insertTable = "INSERT newtable SELECT * FROM Planner_Messages; ";	
	//$tableCheck = "SELECT 2 FROM Planner_Messages LIMIT 1";
	
 // ALTER TABLE my_old_db.mytable RENAME my_new_db.mytable
	
	
        // Execute the query
        $result = $dbLink->query($query);
	//	$headerRemoved = $dbLink->query($deletefirstrow);
 }
        // Check if it was successful
        if($result===TRUE) {
            echo 'Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        } 
//}
 
//	$tableCreation = $dbLink->query($createTable);
//	$copyTable = $dbLink->query($insertTable);
                                                                                                                                                                   
//if($tableCreation && $copyTable === TRUE) {
//	echo ' Table successfully created';
//} else {
//	echo ' error';
//}

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



