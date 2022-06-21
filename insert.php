<?php
	$con=new mysqli("localhost","root","","comment");
	if($_POST["text"]!="")
	{
	$sql="INSERT INTO datas(COMMENT,LOGS) VALUES('{$_POST["text"]}',NOW())";
	$con->query($sql);
	}
	else
	{
		echo "Please Type COMMENT";
	}
?>