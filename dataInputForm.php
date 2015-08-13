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
	<div id="tfheader" style="color:black">
		<form id="tfnewsearch" method="get" action=">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
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
   <li><a href='about.php'><span>Tasks</span></a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span>Contact Admin</span></a></li>
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
<br>


<form action="inputTable.php" method="post" enctype="multipart/form-data">
Today's Date:
<?php
date_default_timezone_set('America/Los_Angeles');
echo date("m/d/y");
?>
<br>
Contract Admin: <input type="text" method="post" name="contractAdmin"></input>
<br><br>
Customer Name: <input type="text" method="post" name="customerName"></input>
<br><br>
Order #: <input type="text" method="post" name="orderNumb"></input>
<br><br>
<input type="submit" value="Update"> 
</form>
<br>


<?php include "tableToWebpage.php"; ?>


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