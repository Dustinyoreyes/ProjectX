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
<h1>Data Input Form</h1>
</div>

<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>

<div id="print">
<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>

</header>

<aside id="asidemenu">
<div id='cssmenu'>
<ul>
   <li><a href="index.php"><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>File Upload</span></a>
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
   <li><a href='dataInputForm.php'><span>Data Input Form</span></a></li>
   <li><a href='about.php'><span>About</span></a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span>Contact Admin</span></a></li>
</ul>
</div>
</aside>

<section id= "section">
<br>
Under construction
<br>
<?php 
$contractAdmin = $customerName = $orderNumb = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
$contractAdmin = test_input ($_POST["CA"]);
$customerName = test_input ($_POST["CN"]);
$orderNumb = test_input ($_POST["OrderNumb"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
Today's Date:
<?php
echo date("d/m/Y");
?>
<br>
Contract Admin: <input type="text" method="post" name="CA"></input>
<br><br>
Customer Name: <input type="text" method="post" name="CN"></input>
<br><br>
Order #: <input type="text" method="post" name="OrderNumb"></input>
<br><br>
<input type="submit" value="Update"> 
</form>
<br>

<table style="width:50%">
<tr>
<th>ID</th>
<th>Contract Admin</th>
<th>Customer Name</th>
<th>Order #</th>
</tr>
<td></td>
<td><?php echo $contractAdmin?></td>
<td><?php echo $customerName?></td>
<td><?php echo $orderNumb?></td>
</table>



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