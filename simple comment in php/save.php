<?php
$con=new mysqli("localhost","root","","skk");
$res=$con->query("insert into comments (NAME,MESS,LOGS) value ('{$_POST["na"]}','{$_POST["me"]}',NOW())");
?>