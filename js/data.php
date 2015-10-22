

<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'db_highcharts');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$result= mysqli_query('select * from sales order by id');
while($row = mysqli_fetch_array($result)) {
  echo $row['month'] . "\t" . $row['amount']. "\n";





?>