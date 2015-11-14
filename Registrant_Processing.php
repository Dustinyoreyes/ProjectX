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


$conn = new mysqli('127.0.0.1', 'root', 'root', 'user_login');
if (!$conn) {
	die('Connection failed');
} 

$name = $LastName = $email = $username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
$name = test_input ($_POST["name"]);
$LastName = test_input ($_POST["LastName"]);
$email = test_input ($_POST["email"]);
$username = test_input ($_POST["username"]);
$password = test_input ($_POST["password"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$sql = "INSERT INTO registrant (FirstName,LastName,Email,Username,Password) VALUES ('$name','$LastName','$email','$username','$password')";

//$nameEmpty = empty($_POST[$name]); 
//$LastNameEmpty = empty($_POST[$LastName]);
//$emailEmpty = empty($_POST[$email]);
//$passwordEmpty = empty($_POST[$password]);



if ($conn->query($sql) === TRUE) { 
echo "<script> alert('New record was created successfully'); </script>";
//header("Location: UserLoginNew.html"); 
//echo "<script> alert('New record was created successfully'); </script>" ."<br>";} else { echo "Error: ". $sql . "<br>" . $conn->error;


}

$conn->close();

?>


<p>
      <button class="btn btn-primary" onclick="location.href = 'http://localhost/projectx/UserLoginNew.html';" id="myHomeButton">Return to Login</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/UserLoginNew.html";
    };
</script>



</html>