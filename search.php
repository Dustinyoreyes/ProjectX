
Search Results:
<?php  
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
} 

$search = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
$search = mysqli_real_escape_string($dbLink,$_POST["search"]);	
$search = test_input ($_POST["search"]);
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

echo $search;

$query = "SELECT * FROM namelist WHERE 
id LIKE '%{$search}%' OR
contractAdmin LIKE '%{$search}%' OR
customerName LIKE '%{$search}%' OR
orderNumb LIKE '%{$search}%' OR 
created LIKE '%{$search}%'";

$results = $dbLink->query($query);

if (empty($search)) {
	die("empty");
}
// Check if it was successful
if($results) {
    // Make sure there are some files in there
    if($results->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="80%" class="table table-hover">
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Contract Admin</b></td>
                    <td><b>Customer Name</b></td>
                    <td><b>Order Number</b></td>
					<td><b>Created</b></td>
                </tr>';
	}
}
 
         while($row = $results->fetch_assoc()) {
?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['contractAdmin'];?></td>
                    <td><?php echo $row['customerName'];?></td>
					<td><?php echo $row['orderNumb'];?></td>
					<td><?php echo $row['Created'];?></td>
					</form>
                </tr>
			
<?php
} 
?>

</section>


</body>
</html>