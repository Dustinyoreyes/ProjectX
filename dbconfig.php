<?php 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', 'root', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}



?>