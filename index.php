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

<body id="body">
<header id="header">
<div>
<h1 id="headtitle">Home Page</h1>
</div>

<!-- HTML for SEARCH BAR -->
	<div id="tfheader" style="color:black" class="panel panel-default">
		<form id="tfnewsearch" method="get" action="">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="130"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>

</header>

<aside id="asidemenu">
<div id='cssmenu'>
<ul>
   <li><a href='#' class="well"><span id="home" class="glyphicon glyphicon-home"></span> Home</a></li>
   <li class='active has-sub'><a href='#'><span id="fileupload" class="glyphicon glyphicon-file"></span> File Upload</a>
      <ul>
         <li class='has-sub'><span><a href="FileUploadNavDatabase.php"> Upload to database</span></a>
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
   <li><a href='about.php'><span id="tasks" class="glyphicon glyphicon-tasks"></span> Tasks</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>

<section id="section">
Testing Page

<div id="print">
<span class="glyphicon glyphicon-print"></span>
<button onclick="myFunction()" style="color:black">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>

<div id="">
    <form action="add_file.php" method="post" enctype="multipart/form-data">
		<!--forecast DB/customer-->
       <h3> Select file and upload to forecast DB:</h3>
		<input type="file" name="uploaded_file" id="file"><br>
        <input type="submit" value="Upload File" id="submit">
    </form>
  
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
	<!-- local server EmailLink2/userfile-->
	<h3>Send this file to local server :</h3>
	<input name="userfile" type="file" id="file"/><br>
    <input type="submit" id="submit" value="Send File"/>
</form>
<br>
	<p>
        <a href="list_files.php">See all files</a>
    </p>
</div>	
	<br>
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