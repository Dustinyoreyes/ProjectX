<!DOCTYPE html>
<head>
    <title>Return Home</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>



<?php
 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `contractAdmin`, `customerName`, `orderNumb`, `created` FROM `namelist`';
$result = $dbLink->query($sql);
 
// Check if it was successful
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="80%" class="table table-hover">
                <tr>
					<td><b>Action</b></td>
                    <td><b>ID</b></td>
                    <td><b>Contract Admin</b></td>
                    <td><b>Customer Name</b></td>
                    <td><b>Order Number</b></td>
					<td><b>Created</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
					<td><a><button><span class='glyphicon glyphicon-trash'></span></button></a></td>
                    <td>{$row['id']}</td>
                    <td>{$row['contractAdmin']}</td>
                    <td>{$row['customerName']}</td>
					<td>{$row['orderNumb']}</td>
					<td>{$row['created']}</td>
                </tr>";
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();



 
 
 ?>
 
 
 </html>