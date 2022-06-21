<html>
	<head>
	<title>Show and Hide Password</title>
	</head>
	<body>
		<h2>show and Hide Password</h2>
		<div id="reg">
		<form>
		<label>User Name</label>
		<input type="text" id="uname" name="uname">
		<label>Password</label>
		<input type="password" id="pass" name="pass">
		<label>
		<input type="checkbox" id="chk">Show Password
		</label>
		</form>
		</div>
		<script src="jquery-3.4.1.min.js"></script>
		<script>
		$("#chk").click(function(){
			
			if($(this).prop('checked'))
			{
				$("#pass").attr("type","text");
			}
			else
			{
			$("#pass").attr("type","password");
				
			}
		});
		</script>
	</body>
</html>