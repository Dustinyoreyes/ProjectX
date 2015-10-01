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
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="searching_plugin.js"></script>
   <title>CSS MenuMaker</title>	
</head>

<style>
table, th,td {
		border: 1px solid black;
		border-collapse: collapse;
}
th,td {
	padding: 5px;
}
</style>


<body id="body">
<header id="header">
<div>
<h1 id="headtitle">Data Input Form</h1>
</div>

<!-- HTML for SEARCH BAR -->
	<div id="tfheader" style="color:black" class="panel panel-default">
		<form id="tfnewsearch" method="get" action="http://www.google.com/" target="_blank">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="Search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
</header>

<aside id="asidemenu">
<div id='cssmenu'>
<ul>
   <li><a href="index.php"><span id="home" class="glyphicon glyphicon-home"></span> Home</a></li>
   <li class='active has-sub'><a href='#'><span id="fileupload" class="glyphicon glyphicon-file"></span> File Upload</a>
      <ul>
         <li class='has-sub'><span><a href="FileUploadNavDatabase.php">Upload to database</span></a>
            <!--
			<ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
			-->
			
         </li>
         <li class='has-sub'><span><a href="FileUploadNavLocal.php">Upload to local server</span></a>
            
			<!--
			<ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
			-->
			
         </li>
      </ul>
   </li>
   <li><a href='dataInputForm.php'><span id="forminput" class="glyphicon glyphicon-list-alt"></span> Form Input</a></li>
   <li><a href='tasks.php'><span id="tasks" class="glyphicon glyphicon-tasks"></span> Tasks</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>

<section id= "section">

<div id="print">
<span class="glyphicon glyphicon-print"></span>
<button onclick="myFunction()" style="color:black">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>
Under construction
<br><br>



<form action="inputTable.php" method="post" enctype="multipart/form-data">
<b>Today's Date:</b>

<?php
date_default_timezone_set('America/Los_Angeles');
echo date("m/d/y");
?>

<br>
<br>
<b>Contract Admin:</b> <input type="text" method="post" name="contractAdmin"></input>
<br><br>
<b>Customer Name:</b> <input type="text" method="post" name="customerName"></input>
<br><br>
<b>Order #:</b> <input type="text" method="post" name="orderNumb"></input>
<br><br>
<input type="submit" value="Submit" id="submit"> 
</form>
<br><br>

<?php include "tableToWebpage.php";?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
  <input type="search" name="search" alt="Please click Search Table"><input type="submit" value="Search Table">
</form>  
 
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
					<form action="Delete.php" method="post">
					<td><input type='checkbox' name="checkbox[]" id="checkbox[]" value="<?php echo $row['id'];?>"/><input type="hidden" name="delete" value="yes"/><input type="submit" name="delete"/></td>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['contractAdmin'];?></td>
                    <td><?php echo $row['customerName'];?></td>
					<td><?php echo $row['orderNumb'];?></td>
					<td><?php echo $row['created'];?></td>
					</form>
                </tr>
			
<?php
}
?>






</section>

<article id="article">
Article
</article>

<footer id="footer">
<?php
include 'footer.php';
?>
</footer>


</body>
</html>