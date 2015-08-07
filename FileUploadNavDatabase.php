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

<body id="body">
<header id="header">
<div>
<h1>Upload to database</h1>
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
         <li class='has-sub'><span><a href="index.php">Upload to database</span></a>
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
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top"><span>Contact Admin</span></a></li>
</ul>
</div>
</aside>

<section id="section">
<div>
    <form action="add_file.php" method="post" enctype="multipart/form-data">
		<!--forecast DB/customer-->
       <h3> Select file and upload to forecast DB:</h3>
		<input type="file" name="uploaded_file" id="file"><br>
		<br>
        <input type="submit" value="Upload File" id="submit">
    </form>
<p>
<a href="list_files.php">See all files</a>
</p>
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