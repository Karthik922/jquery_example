<html>
	<title>Multiple Check Box </title>
	<head>
	
	</head>
	<body>
	<h1>Multiple Check Box Using JQuery With PHP nd MYSQL </h1>
	<form id='frm'>
	<label>Select The Subjects</label>
	<p><input type="checkbox" name="subject[]" value="English">English</p>
	<p><input type="checkbox" name="subject[]" value="Tamil">Tamil</p>
	<p><input type="checkbox" name="subject[]" value="Maths">Maths</p>
	<p><input type="checkbox" name="subject[]" value="Science">Science</p>
	<p><input type="checkbox" name="subject[]" value="Social">Social</p>
	<button type="button" id="save">Save Details</button>
	</form>
	<p id="out">
	
	</p>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#save").click(function(){
			//alert("hi");
			$.ajax({
				url:"save.php",
				type:"post",
				data:$("#frm").serialize(),
				success:function(data)
				{
				$("#out").html(data);
				}
			});
		});
	});
	</script>

	</body>
</html>