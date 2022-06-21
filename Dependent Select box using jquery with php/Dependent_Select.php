<?php 
$con =new mysqli("localhost","root","","test");
?>
<html>
<head><title>Dependent Select box</title></head>
	<style type="text/css">
	.load
	{
		padding:15px;
		height:auto;
		width:500px;
		margin:25px ayto;
		backgroud:#eeeeee;
		margin-top:50px;
		border-radius:5px;
		box-shadow:10px 10px 5px 5px grey;
	
	}
	#country
	{
		width:250px;
		height:30px;
		margin-top:5px;
		display:block;
		
	}
	#state{
		width:250px;
		height:30px;
		margin-top:5px;
		display:block;
	}
	h1
	{
		color:#3f48fa;
		text-shadow:2px 2px;
		text-align:center;
		margin-top:50px;
		#b0f2f2
	}
	button
	{
		border-radius:5px;
		margin-top:15px;
	}
	
	</style>
	<body>
		<div class="load">
		<h1>Dependent ListBox</h1>
		<label>Select Country</label>
		<select id="country">
		<option value="">Select</option>
		<?php
		$sql="select * from country";
		$res=$con->query($sql);
			while($row=$res->fetch_assoc())
			{
				echo "<option value='{$row["COUNTRY_ID"]}'>{$row["COUNTRY_NAME"]}</option>";
			}
		?>
		</select><br/>
		
		<label></label>
		<select id="state"><label>Select State</label>
		<option value="">Select</option>
		</select>
		<button id="cname">COUNTRY NAME</button>
		<button id="cid">COUNTRY ID</button>
		
		</div>
				<script src="jquery-3.4.1.min.js"></script>
					<script>
					$("document").ready(function(){
						$("#cid").click(function(){
							alert($("#country").val());
						});
						$("#cname").click(function(){
							alert($("#country option:selected").text());
						});
						
					$("#country").change(function(){
						cid=$(this).val();
						//alert(cid);
						$.post("state.php",{id:cid},function(data){
							$("#state").html(data);
						});
						
					});
					});
					</script>
	</body>
</html>