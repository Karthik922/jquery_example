<?php
	$con=new mysqli("localhost","root","","comment");
	if(isset($_POST["id"]))
	{
		foreach($_POST["id"] as $id)
		{
			$sql="DELETE FROM details WHERE ID=$id";
			$con->query($sql);
		}
	}
?>