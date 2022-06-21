<html>
<head>
<title>Auto Refresh Comment </title>
</head>
<body bgcolor="#488522">
<center>
	<div id="reg">
		<form id="frm">
		<h1>Auto Refresh Comment</h1>
		<h2>Your Comment</h2>
		<textarea type="text" id="text" name="text"></textarea><br>
		<button type="button" id="save">Send Message</button>
		</form>
	
	</div>
	<div id="load">
	</div>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#save").click(function(){
			$.ajax({
				url:"insert.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(d)
				{
					$("#frm")[0].reset();
				}
			});
		});
		setInterval(function(){
			$("#load").load("select.php").fadeIn("3000");
		},1000);
	});
	</script>
</center>
</body>
</html>