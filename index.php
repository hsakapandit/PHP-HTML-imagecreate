<html> 
<head>
<title>Baby Name</title>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function(){
var imagename=$("#name").val();
$("#back").hide();
$("form").submit(function(event){
$("#data").hide();
$("#image").show();
$("#image").html('<br/><br/><img src="/a/loading.gif" width="100" height="100"/><br/><br/><br/>Loading Image ...');
$.post( "images.php", $( "#data" ).serialize(),function(data){$("#image").show();
$("#back").show(1000);
$("#image").html("<img src='images.php'/>");} );
event.preventDefault();
});
$("#back").click(function(){
$("#back").hide();
$("#image").html("By <b>Akash Sharma</b> (hsakapandit@gmail.com)");
$("#data").show(1000);
});
});</script>
</head>

<body style="margin:0px;">
<center>
<form method="post" action="images.php" id="data">
<table style="margin-top:40px;margin-bottom:30px;"><tr><td>Image Name :</td><td><input type="text" id="name" name="imagename" placeholder="Enter Image Name"/></td></tr>
<tr><td></td><td><input type="submit" name="sumbit" id="submit" value="Create Image"/></td></tr></table>
</form></center>

<div id="image" style="text-align:center;">By <b>Akash Sharma</b> (hsakapandit@gmail.com)</div>
<div id="back" style="text-align:center;margin-top:30px;"><button id="back">Go Back</button></div>

</body>
</html>