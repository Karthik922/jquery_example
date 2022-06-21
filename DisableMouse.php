<html>
<head>
<title>How to Disable Mouse Click Using Jquery</title>
<style type="text/css">
body
{
	font-family:roboto;
	text-align:center;
	height:800px;
	width:500px;
	margin:0 auto;
	
}
#box
{
	height:500px;
	width:500px;
	background: url('fine.jpg');
}
</style>
</head>
<body>
<h1>How to Disable Mouse Right Click Using Jquery</h1>
<div id="box">

</div>
<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#box").on("contextmenu",function(e){
			alert('right click disabled');
			return false;
		});
	});
	</script>
</body>
</html>
