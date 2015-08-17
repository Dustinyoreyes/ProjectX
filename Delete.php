<?php

$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

// Query for a list of all existing files
$sql = 'DELETE FROM namelist WHERE `id=`';
$result = $dbLink->query($sql);

if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    } else { echo "deleted" }


$delete = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
$delete = mysqli_real_escape_string($dbLink,$_POST["delete"]);	

}

	
	
$dbLink->close();


?>

<?php
        $query = "SELECT * FROM namelist ORDER BY id DESC";
        $tabledata = mysqli_query($dbLink, $query);
        while($row = mysqli_fetch_array($tabledata)){
          echo '<tr>
            <td class="tdate">'.$row['tdate'].'</td>
            <td class="player">'.$row['player'].'</td>
            <td class="tinfo">'.$row['tinfo'].'</td>
            <td class="stake">'.$row['entry'].'</td>
            <td class="result">'.$row['result'].'</td>
            <td><button class="deletedata">Del</button></td>
          </tr>';
        } ?>