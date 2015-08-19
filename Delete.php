<!DOCTYPE html>


<?php

$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}


$sql = "DELETE FROM namelist WHERE id='40'";
$result = $dbLink->query($sql);

if($result == 40 && $_SERVER["REQUEST_METHOD"] == "POST" ) {
     
	 echo '<table width="80%" class="table table-hover">
                <tr>
					<td><b>Action</b></td>
                    <td><b>ID</b></td>
                    <td><b>Contract Admin</b></td>
                    <td><b>Customer Name</b></td>
                    <td><b>Order Number</b></td>
					<td><b>Created</b></td>
                </tr>';

            
        // Print each file, the [] value is from the table
        while($row = $result->fetch_assoc()) {
            echo "
                <tr id='rowdelete'>
					<td><a><button id='trashbin' onclick='loadXMLDoc()'><span class='glyphicon glyphicon-trash'></span></button></a></td>
                    <td>{$row['id']}</td>
                    <td>{$row['contractAdmin']}</td>
                    <td>{$row['customerName']}</td>
					<td>{$row['orderNumb']}</td>
					<td>{$row['created']}</td>
                </tr>";
	}
		
	'</table>';
}


		
	
$dbLink->close();


?>

</html>
		