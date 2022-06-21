<?php
	$con = new mysqli("localhost","root","","skk");
	$n=count($_POST["id"]);
	for($i=0;$i<$n;$i++)
	{
		$sql="INSERT INTO marks (ID,MARK1,MARK2) values ({$_POST["id"][$i]},{$_POST["m1"][$i]},{$_POST["m2"][$i]})";
		$con->query($sql);
		
	}
	echo "Data Saved<a href='report.php'>Report</a>";
?>