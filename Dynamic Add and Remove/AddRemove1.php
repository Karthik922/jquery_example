<!DOCTYPE html>
<html>
<head>
<title>Dynamic Add And Remove</title>
</head>
<body bgcolor="#00ffff">
	<h2>Dynamic Add And Remove INPUT Field In Jquery With PHP And Mysql </h2>
	<div id="reg">
	<form id="frm">
		<table id="tb">
			<tr>
			<td><input type="text" name="course[]" placeholder="Enter Course"></td>
			<td><button type="button" id="add">ADD More</button></td>
			</tr>
		</table>
		<button type="button" id="submit">Submit</button>
	</form>
	<p></p>
	
	</div>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#add").click(function(){
			//alert("hai");
			$("#tb").append('<tr><td><input type="text" name="course[]" placeholder="Enter Course"></td><td><button type="button" class="del">Delete</button></td></tr>');
		});
		$(document).on('click','.del',function(){
			$(this).closest("tr").remove();
		});
		$("#submit").click(function(){
			$.ajax({
				url:"save.php",
				type:"post",
				data:$("#frm"),serialize(),
				success:function(data)
				{
					$("p").html(data);
					$("#frm")[0].reset();
				}
			});
		});
	});
	</script>
</body>
</html>