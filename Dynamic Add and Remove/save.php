<?php
	$con=new mysqli("localhost","root","","comment");
	$n=count($_POST["course"]);
	if($n>=1)
	{
		for($i=0;$i<$n;$i++)
		{
			if(trim($_POST["course"][$i])!='')
			{
				$sql="insert into course(COURSE) values('{$_POST["course"][$i]}');";
				$con->query($sql);
			}
		}
		echo "saved";
	}
	else
	{
		echo "No Record Found";
	}
?>