<!DOCTYPE html>
<head>
   <title>MySQL file upload example</title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <title>CSS MenuMaker</title>
	
</head>




<p>
      <button onclick="location.href = 'http://localhost/projectx/FileUploadNavDatabase.php';" id="myHomeButton">Return to File Upload</button>
</p>
<script type="text/javascript">
document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/projectx/FileUploadNavDatabase.php";
    };
</script>



<?php
if(!empty($_FILE["file"])){
      echo "not set";
	  if(isset($_FILE["file"])){
		  echo "is set";
	  }
  } 

	//echo "<script type=\"text/javascript\"> alert(\"Please choose a file\");</script>";

 
?>

<script>
$(document).ready(function(){
    $("submit").click(function(){
        $(this).alert("Please upload something!");
    });
});
</script>


</html>