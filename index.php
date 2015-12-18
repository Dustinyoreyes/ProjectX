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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <title>CSS MenuMaker</title>
</head>

<body id="body">
<header id="header"><h5><a style="float:right" id="logout" href="UserLogin.html"> Log Out</a></h5>
<div>
<h1 id="headtitle">Home Page</h1>
</div>

<!-- HTML for SEARCH BAR -->
	<div id="tfheader" style="color:black" class="panel panel-default">
		<form id="tfnewsearch" method="get" action="http://www.google.com/" target="_blank">
		        <input type="text" class="tftextinput" name="q" size="50" maxlength="130"><input type="submit" value="Search" class="tfbutton">
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
   <li><a href='special.php'><span id="forminput" class="glyphicon glyphicon-list-alt"></span> Form Input</a></li>
   <li><a href='tasks.php'><span id="tasks" class="glyphicon glyphicon-tasks"></span> Tasks</a></li>
   <li><a href='downloads.php'><span id="downloads" class="fa fa-download"></span> Downloads</a></li>
   <li><a href='worksheet.php'><span id="Worksheet" class="fa fa-table"></span> Worksheet</a></li>
   <li><a href='worksheet2.php'><span id="Worksheet2" class="fa fa-bar-chart"></span> Worksheet2</a></li>
   <li><a href='worksheet3.php'><span id="Worksheet3" class="glyphicon glyphicon-star"></span> Worksheet3</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>

<div id="print">
<button onclick="myFunction()" style="color:black" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
<script src="printIcon.js">
</script>
</div>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 500px;
      margin: auto; 

  }
  #myCarousel{
	  max-height: 500px;
	  max-width: 70%;
	  margin:25px 190px 35px;
	  border: dotted;
  }
</style>

<section id="section">

<div class="container">
<div id="myCarousel" class="carousel slide">
<!-- Indicators -->
<ol class="carousel-indicators">
	  <li class="item1 active"></li>
      <li class="item2"></li>
</ol>
<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="meggittlogo.jpg" alt="pic">
        <div class="carousel-caption">
          <h4>Home</h4>
          <p></p>
        </div>
      </div>
  
<div class="item">
        <img src="Capture.png" alt="pic">
        <div class="carousel-caption">
          <h4>Global team</h4>
          <p></p>
        </div>
      </div>
 
<!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only" aria-hidden="true">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only" aria-hidden="true">Next</span>
    </a>
  </div>


<script src="homeCarousel.js">
</script>
</div>

Testing Page


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