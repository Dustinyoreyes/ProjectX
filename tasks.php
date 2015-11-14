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
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <title>CSS MenuMaker</title>
</head>

<body id="body">
<header id="header"><h5><a style="float:right" id="logout" href="UserLogin.html"> Log Out</a></h5>
<div>
<h1 id="headtitle">Tasks<h1>
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


<div id="print">
<button onclick="myFunction()" style="color:black" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
<script src="printIcon.js">
</script>
</div>

<section id= "section">

<div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">Section A</a></li>
        <li><a data-toggle="tab" href="#sectionB">Section B</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dropdown1">Dropdown1</a></li>
                <li><a data-toggle="tab" href="#dropdown2">Dropdown2</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Section A</h3>

<br><br>
<div>
<p id="demo">Toggle file data</p>
<input type="button" id="display" value="Click">
<script src="FileLoadedToggle.js">
</script>
</input>
</div>

<br><br>
<div>
<p id="demo2">Alert Box</p>
<input type="button" id="onClickalert" value="Click">
<script src="alertBox.js">
</script>
</input>
</div>

<br><br>
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

<script src="multiplicationCalculator.js">
</script>

<hr>

<br><br>
<div ng-app="">
<p>Input: <input type="text" ng-model="name" placeholder="Please enter name"></p>
<h2> Instant output: {{name}} </h2>
</div>
<br><br>


<div class="container">
    <h4>Table Management</h4>
    <div class="table-responsive">
    <table border="1" class="table table-striped table-hover table-bordered">
<tr>
    <td><?php ?></td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td>    <td>aaa</td><td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>
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
		

<!--		
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

-->


<form name="upload-form" id="upload-form" action="upload-information.php" enctype="multipart/form-data" method="post">

    <input type="file" name="dealers_csv" id="dealers_csv" required="required" data-message="Please attach the mcust.csv file.">

    <button type=\"submit\" name=\"Submit\" id=\"Submit\" class=\"csbutton-color upload-button\" style=\"margin-right:10px;\" >Submit files</button>

</form>


<script>
$(document).ready(function() {
    $("input#dealers_csv").on("change", function() {
        var dealers = $("input#dealers_csv");
        var arrfilepath = dealers.val().split("\\");
        var filename = arrfilepath[arrfilepath.length - 1];
        alert(filename);
        if (filename === 0) {
            alert("no file");
            dealers.val('');
        }
    });
});

</script>


<br><br>

<form name="yourForm" method="post" enctype="multipart/form-data"">
    <input type="file" name="fileField" />
    <input type="button" value="submit" onClick="checkFile(this.form)" />
</form>

<script>
function checkFile(yourForm){

    var fileVal = yourForm.elements['fileField'].value;

    //RegEx for valid file name and extensions.
    //var pathExpression = "[?:[a-zA-Z0-9-_\.]+(?:.png|.jpeg|.gif)";


    if(fileVal != ""){
        if(!fileVal.toString().match(pathExpression) && confirm("The file is not a valid image. Do you want to continue?")){
            yourForm.submit();
        } else {
            return;
        }
    } else {
        if(confirm("Do you want to continue without adding image?")) {
            yourForm.submit();
        } else {
            return;
        }
    }
}
</script>

<!--toggle(1000) refers to the speed of toggle-->
<br><br>
<button id="gifVid">Toggle GIF</button>
<script>
$(document).ready(function(){
    $("#gifVid").click(function(){
        $("img").toggle(1000);
    });
});
</script>
<br><br>

<img src="testing.gif" alt="pic" height="50%" width="50%">
<br><br>








<br>
<div>
<ul class="pager">
    <li class="previous"><a href="#">Previous page</a></li>
    <li class="next"><a href="#">Next page</a></li>
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