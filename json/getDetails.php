<?php
$result=array();
$con=new mysqli("localhost","root","","skk");
$sql="select * from user2 where REG='{$_POST["re"]}'";
$res=$con->query($sql);
if($res->num_rows>0)
{
	$result=$res->fetch_assoc();
	$result["ERROR"]=0;
}
else
{
		$result["ERROR"]=1;
		

}
echo json_encode($result);
?>