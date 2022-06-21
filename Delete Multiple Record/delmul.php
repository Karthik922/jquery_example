<?php
	include("deldb.php");
?>
<!DOCTYPE html> 
<html>
<head>
<title>Delete Multiple Record</title>
<style type="text/css">
button
{
	margin-left:460px;
	background-color:#4caf50;
	border:none;
	color:white;
	padding:6px 25px;
	text-align:center;
	text-deecoration:none;
	display:inline-block;
	font-size:16px;
	border-radius:15px;
	margin-top:20px;
	box-shadow:0 5px #999;
	cursor:pointer;
}
</style>
</head>
<body>
<h1>Multiple Record Delete Using Jquery</h1>
<?php
	$sql="SELECT * FROM details";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		echo "<table border='1' align='center'>
		<tr>
			<th>*</th>
			<th>SNO</th>
			<th>NAME</th>
			<th>AGE</th>
			<th>CONTACT</th>
			<th>CITY</th>
		</tr>
		";
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr id='".$row["ID"]."'>
					<td><input type='checkbox' name='id[]' class='record' value='{$row["ID"]}'></td>
					<td>{$i}</td>
					<td>{$row["NAME"]}</td>
					<td>{$row["AGE"]}</td>
					<td>{$row["CONTACT"]}</td>
					<td>{$row["CITY"]}</td>
				  </tr>
			";
		}
		echo "</table><button type='button' id='del'>Delete Datas</button>";
	}
	else
	{
		echo "No Record Found";
	}
	
?>
<script src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#del").click(function(){
				if(confirm("Are You sure to delete"))
				{
					var id=[];
					$(':checkbox:checked').each(function(i){
						id[i]=$(this).val();
					});
					if(id.length==0)
					{
						alert("please select the record to delete");
					}
					else
					{
						$.ajax({
							url:"deldb.php",
							type:"post",
							data:{id:id},
							success:function(data){
								for(var i=0;i<id.length;i++)
								{
									$('tr#'+id[i]+'').remove();
								}
							}
						});
					}
				}
				else
				{
					return false;
				}
			});
		});
	</script>
	
</body>

</html> 