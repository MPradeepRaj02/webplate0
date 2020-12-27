<?php
$conn=new mysqli('localhost','root','');
$sql="SHOW DATABASES";
$res=$conn->query($sql);
echo $res['Database'].'\n';
?>