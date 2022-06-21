<?php
$con=new mysqli("localhost","root","","skk");
$res=$con->query("SELECT * FROM comments");
if($res->num_rows>0)
{
	while($row=$res->fetch_assoc())
	{
		echo "<li><b>{$row["NAME"]}:</b>{$row["MESS"]}</li>";
	}
}
?>