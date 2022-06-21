<html>
<head>
<title>Countdown Timer Jquery </title>
</head>
<body bgcolor="#488522">
<center>
	<div id="reg">
		<h1>Countdown Timer Jquery</h1>
		<p id="demo"></p>
		
	</div>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
		var date=new Date("Feb3,2021 04:20:01").getTime();
		var x=setInterval(function(){
			var now=new Date().getTime();
			var dif=date-now;
			var days=Math.floor(dif/(1000*60*60*24));
			var hour=Math.floor((dif%(1000*60*60*24))/(1000*60*60));
			var min=Math.floor((dif%(1000*60*60))/(1000*60));
			var sec=Math.floor((dif%(1000*60))/1000);
			$("#demo").html(days+"  Days  "+hour+"  Hours "+min+"  minutes "+sec+"  Seconds  ");
			if(dif<0)
			{
				clearInterval(x);
				$("#demo").html("Expired");
			}
		},1000);
	$(document).ready(function(){
		
	});
	</script>
</center>
</body>
</html>