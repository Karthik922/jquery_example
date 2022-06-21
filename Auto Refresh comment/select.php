<?php
	$con=new mysqli("localhost","root","","comment");
	$sql="select * from datas order by ID DESC";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		while($row=$res->fetch_assoc())
		{
			echo "<p>{$row["COMMENT"]}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>{$row["LOGS"]}</i></p>";
		}
	}
	else
	{
		echo "<p>No Comment Available</p>";
	}
?>