




<?php





//if the username and password matches then -> directed to Homepage

$conn = new mysqli('127.0.0.1', 'root', 'root', 'user_login');
if (!$conn) {
	die('Connection failed');
} 

$userid = $userpassword = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
$userid = test_input ($_POST["username"]);
$userpassword = test_input ($_POST["password"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	
	
	$query=mysqli_query($conn,"SELECT * FROM registrant WHERE Username='$userid' && Password='$userpassword'");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
	
    if ($count==1)
    {
        session_start();
        $_SESSION['Username'] = $_POST['username'];
        $_SESSION['Password'] = $_POST['password'];
        header("location: index.php");
	}
	
	if($count!==1) {
		include "UserLogin.html";
		echo "<script language='javascript'>";
		echo "alert('Invalid login')";
		echo"</script>";
		
	} 
		

    mysqli_close($conn);


?>









