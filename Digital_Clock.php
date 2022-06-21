<!DOCTYPE html>
<html>
<head>
<title>Digital Clock</title>
<style type="text/css">
#clock
{
	font-size:20px;
	background-color:gray;
	border-radius:5px;
	width:200px;
	text-align:center;
	margin-top:50px;
	margin-left:290px;
}
h1
{
	text-align:center;
	color:blue;
}

</style>
</head>
<body>
	<h1>Digital Clock In Jquery</h1>
	<p id="clock"></p>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		setInterval(function(){
			var d=new Date();
			var h=d.getHours()<10?"0"+d.getHours():d.getHours();
			var m=d.getMinutes()<10?"0"+d.getMinutes():d.getMinutes();
			var s=d.getSeconds()<10?"0"+d.getSeconds():g.getSeconds();
			$("p").html(h+":"+m+":"+s);
		},1000);
	});
	</script>
</body>
</html>