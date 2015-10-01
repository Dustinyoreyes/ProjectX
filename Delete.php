


<?php
$dbLink = new mysqli('127.0.0.1', 'root', '', 'forecast');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$cheks = $_POST['checkbox'];
$sql = "DELETE FROM namelist WHERE id IN ('$cheks')";
$result = mysqli_query($dbLink,$sql) or die("failed delete:". mysqli_errno());

$dbLink->close();


?>
