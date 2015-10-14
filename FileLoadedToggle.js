
$(document).ready(function(){
    $("#display").click(function(){
  
	$("#demo").load("userfile/demo_test.txt");
	$("#demo").toggle("userfile/demo_test.txt");
    });
});

//$("#demo").load("userfile/demo_test.txt");
//$("#demo").toggle("userfile/demo_test.txt");