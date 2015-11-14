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
<header id="header"><h5><a style="float:right" id="logout" href="UserLogin.html"> Log Out</a></h5>
<div>
<h1 id="headtitle">Worksheet 3<h1>
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
   <li><a href='downloads.php'><span id="downloads" class="glyphicon glyphicon-fire"></span> Downloads</a></li>
   <li><a href='worksheet.php'><span id="Worksheet" class="glyphicon glyphicon-star"></span> Worksheet</a></li>
   <li><a href='worksheet2.php'><span id="Worksheet2" class="glyphicon glyphicon-star"></span> Worksheet2</a></li>
   <li><a href='worksheet3.php'><span id="Worksheet3" class="glyphicon glyphicon-star"></span> Worksheet3</a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span id="contactadmin" class="glyphicon glyphicon-envelope"></span> Contact Admin</a></li>
</ul>
</div>
</aside>




<section id= "section">

<div id="print">
<button onclick="myFunction()" style="color:black" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
<script src="printIcon.js">
</script>
</div>











 
 
 </section>


</body>
</html>