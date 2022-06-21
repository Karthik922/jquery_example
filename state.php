<?php
	$con =new mysqli("localhost","root","","test");
	$sql="select * from state where COUNTRY_ID={$_POST['id']}";
	$res=$con->query($sql);
	//echo "<option value=""></option>";
		while($row=$res->fetch_assoc())
		{
			echo "<option value='{$row["STATE_ID"]}'>{$row["STATE_NAME"]}</option>";
		}
?>