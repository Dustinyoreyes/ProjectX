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
$conn = new mysqli('127.0.0.1', 'root', '', 'forecast');
if (!$conn) {
	die('Connection failed');
} 
echo 'Successful connection.';

$contractAdmin = $customerName = $orderNumb = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
$contractAdmin = test_input ($_POST["contractAdmin"]);
$customerName = test_input ($_POST["customerName"]);
$orderNumb = test_input ($_POST["orderNumb"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$sql = "INSERT INTO namelist (contractAdmin,customerName,orderNumb,created) VALUES ('$contractAdmin','$customerName','$orderNumb',NOW())";

if ($conn->query($sql) === TRUE) { 
echo " New record was created successfully";} else { echo "Error: ". $sql . "<br>" . $conn->error;

}

$conn->close();




?>


 <p>
      <button onclick="location.href = 'http://localhost/projectx/dataInputForm.php';" id="myButton">Return to Data Input Form</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/dataInputForm.php";
    };
</script>
	
	
</body>
</html>