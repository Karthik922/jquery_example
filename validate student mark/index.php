<?php
	$con = new mysqli("localhost","root","","skk");
	
?>
<html>
	<head>
		<title>student mark validation</title>
		
	</head>
	<body>
	<h1>Karthik Creation</h1>
	<h3>Multiple Input Field Validation Using Jquery</h3>
	<?php
	$sql="SELECT * FROM users1";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		echo "<form id='frm'><table>";
		echo "<tr>
		<th>SNO</th>
		<th>REGNO</th>
		<th>NAME</th>
		<th>ID</th>
		<th>MARK1</th>
		<th>MARK2</th>
		</tr>";
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
			<td>{$i}</td>
			<td>{$row["REG"]}</td>
			<td>{$row["NAME"]}</td>
			<td><input type='text' readonly name='id[]' value='{$row["ID"]}'></td>
			<td><input type='text' name='m1[]'></td>
			<td><input type='text' name='m2[]'></td>
			</tr>";
		}
		echo "
		<tr><td colspan='6'>
		<button type='button' id='submit'>Save Mark</button>
		</td>
		</tr></table></form>
		";
	}
	else
	{
		echo " <p>No Record Found</p>";
	}
	?>
	<p></p>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			//alert("hai");
			$(document).on("click","#submit",function(e){
				//alert("ho");
				var isValid=true;
				$('input[type="text"]').each(function(){
					if($trim($(this).val())=='')
					{
						isValid=false;
						$(this).css({
							"border":"1px solid red",
							"background":"#ffcece"
						});
					}
					else
					{
						$(this).css({
							"border":"1px solid green",
							"background":"#ffcece"
						});
					}
				});
				if(isValid==false)
				{
					e.preventDefault();
				}
				else
				{
					$.ajax({
						url:"save.php", 
						type:"post",
						data:$("#frm").serialize(),
						success:function(data){
							$("p").html(data);
						}
					});
				}
			});
		});
	</script>
	
	</body>
</html>