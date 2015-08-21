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
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <title>CSS MenuMaker</title>
	
</head>

<body id="body">
<header id="header">
<div>
<h1 id="headtitle">Tasks<h1>
</div>

<!-- HTML for SEARCH BAR -->
	<div id="tfheader" style="color:black">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
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

<br>
<a data-toggle="tooltip" data-placement="right" title="Under Construction!">
Under construction
</a>
<br><br>

<div ng-app="myApp" ng-controller="costCtrl" id="calculator">

Quantity: <input type="number" ng-model="quantity">
Price: <input type="number" ng-model="price">
<br><br>
<p><b>Total = {{ (quantity * price) | currency }}</p>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('costCtrl', function($scope) {
    $scope.quantity = 1;
    $scope.price = 9.99;
});
</script>

<hr>

<div class="container">
    <h4>Table Management</h4>
    <div class="table-responsive">
    <table border="1" class="table table-striped table-hover table-bordered">
<tr>
    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
    </tr><tr>
    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
    </tr><tr>
    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
    </tr><tr>
    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
    </tr><tr>
    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td> <td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
    </tr>
    </table>
</div></div>
<div style="">
 <button class='btn btn-lg btn-primary addnewrow pull-right'>Add New <span class="glyphicon glyphicon-plus"></span></button>
</div>	
<hr>	
		
<script>
$(".deleterow").on("click", function(){
var $killrow = $(this).parent('tr');
    $killrow.addClass("danger");
$killrow.fadeOut(400, function(){
    $(this).remove();
});});

$(".addnewrow").on("click", function(){
$('table tr:last').after("<tr><td data-qid='X'><span>NEW</span></td><td><span>NEW</span></td><td><span>NEW</span></td><td><span>NEW</span></td><td><span>NEW</span></td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td></tr>");
});
</script>






<div>
<ul class="pager">
    <li><a href="#">Previous page</a></li>
    <li><a href="#">Next page</a></li>
  </ul>
</div>  
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