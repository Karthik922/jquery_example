<?php
$con= new mysqli("localhost","root","","skk");
for($i=0;$i<count($_POST["subject"]);$i++)
{	if($_POST["subject"]!="")
	{
	 $sql="insert into subjects(SUBJECT) values('{$_POST["subject"][$i]}')";
	 $con->query($sql);
	 echo "<p>data<br>:{$_POST["subject"][$i]}</p>";
	}
}
?>