 <!DOCTYPE html>
<head>
    <title>Return Home</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<p>
      <button onclick="location.href = 'http://localhost/projectx/index.php#';" id="myButton">Return home</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/index.php#";
    };
</script>
 
 

 <?php
 
 // Connect to the database
$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created` FROM `customer`';
$result = $dbLink->query($sql);
 
// Check if it was successful
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="80%">
                <tr>
                    <td><b>File Name</b></td>
                    <td><b>Mime</b></td>
                    <td><b>Size (bytes)</b></td>
                    <td><b>Created</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['mime']}</td>
                    <td>{$row['size']}</td>
                    <td>{$row['created']}</td>
                    <td><a href='get_file.php?id={$row['id']}'>Download</a></td>
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
 

 <p>
      <button onclick="location.href = 'http://localhost/projectx/index.php#';" id="myButton">Return home</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/index.php#";
    };
</script>
	
	
</body>
</html>
 