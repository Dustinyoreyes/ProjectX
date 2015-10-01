<!DOCTYPE html>
<head>
    <title>Return Home</title>
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
</head>

<p id="demo"></p>

<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to delete users?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
});
</script>


<?php
include_once('dbConfig.php');
$query = mysqli_query($dbLink,"SELECT * FROM namelist");
?>


      <form name="bulk_action_form" action="action.php" method="post" onsubmit="return deleteConfirm();"/>
      <table width="80%" class="table table-hover">
                <thead>
				<tr>
					<td><b>Action</b></td>
                    <td><b>ID</b></td>
                    <td><b>Contract Admin</b></td>
                    <td><b>Customer Name</b></td>
                    <td><b>Order Number</b></td>
					<td><b>Created</b></td>
                </tr>
				</thead>

<?php 
      // Print each file <button onclick='alertDelete()'  class='glyphicon glyphicon-remove'></button>
	     if(mysqli_num_rows($query) > 0){
         while($row = mysqli_fetch_assoc($query)){
?>
                <tr>
					<td><input type='checkbox' name="checked_id[]" class="checkbox" value="<?php echo $row['id'];?>"/></td>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['contractAdmin'];?></td>
                    <td><?php echo $row['customerName'];?></td>
					<td><?php echo $row['orderNumb'];?></td>
					<td><?php echo $row['Created'];?></td>
					</form>
                </tr>
			
<?php } } else { ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
		</table>
			<input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
</form>

 



<br><br>


<script>
function alertDelete(){
	var x; 
	if (confirm("Are you sure you want to delete?")==true) 
	{
		x = $(".deleterow").on("click", function(){
var $killrow = $(this).parent('tr');
    $killrow.addClass("danger");
$killrow.fadeOut(400, function(){
    $(this).remove();
});});;
	} else {
		x = "";
	}
	document.getElementById("demo").innerHTML = x;	
	}
 
 </script>


 
 
 
<!--
<script>

$(".deleterow").on("click", function(){
var $killrow = $(this).parent('tr');
    $killrow.addClass("danger");
$killrow.fadeOut(400, function(){
    $(this).remove();
});});

</script> 
-->


 
 </html>