<html>
	<head>
	<title>PHONE Number Validattion</title>
	<style>
	#err{color:red;
	display:block;
	};
	</style>
	</head>
	<body>
	<center>
	<h1>Type Numeric Values In Text Box Using Jquery</h1>
	Number :<input type="text" name="txt" id="txt"/>
	<p id="err"></p>
	<p id="log"></p>
	</center>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			//alert("haii");
			$("#txt").keypress(function(e){
				$("#log").html("Keycode :"+e.which);
				if(e.which!=8 && (e.which<48 || e.which>57))
				{
					$("#err").html("Digits Only").show().fadeOut("slow");
					return false;
				}
			});
		});
	</script>
	</body>
</html>