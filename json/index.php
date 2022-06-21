<html>
<head>
<title>JSON</title>

</head>
<body>
	<div>
	<h2>jquery JSON Parse with php and mysql</h2>
	<label>Reg No</label>
	<input type="text" name="reg" id="reg" ><br><br>
	<label>Name</label>
	<input type="text" name="name" id="name"><br><br>
	<label>City</label>
	<input type="text" name="city" id="city"><br><br>
	<p>Search Your text</p>
	</div>
		<script src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			// alert("hai");
			$("#reg").keyup(function(){
				var reg=$(this).val();
				$.post("getDetails.php",{re:reg},function(data){
					$("p").html(data);
					var res=JSON.parse(data);
					if(res.ERROR==1)
					{
						$("p").html("No Record Found");
						$("#name").val("");
						$("#city").val("");
					}
					else if(res.ERROR==0)
					{
						$("#name").val(res.NAME);
						$("#city").val(res.CITY);
						$("p").html("Record Found");
					}
				});
			});
		});
	</script>
	
</body>
</html>