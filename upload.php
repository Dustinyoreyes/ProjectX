<!DOCTYPE html>
<head>
    <title>Return Home</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>


<?php


// //In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES. 
//Create a folder named Userfile in the Study folder and you can the upload all files to go in here. 

$uploaddir = '/wamp/www/ProjectX/userfile/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded!!\n";
} else {
    echo "There was an error uploading the file\n";
}

?>

<p>
      <button onclick="location.href = 'http://localhost/ProjectX/index.php';" id="myButton">Return home</button>
</p>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function()) {
        location.href = "http://localhost/ProjectX/index.php";
    };
</script>
	
	
</body>
</html>
