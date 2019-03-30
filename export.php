<?php
$path="C:\\backup\\";
$host="localhost";
$user="abc";
$pass="abc123";


$command="mysqldump -h '127.0.0.1' –u '$user' -p$pass library> d:\\backup\\1.sql";
$cmd=shell_exec($command);
echo $cmd;
if(!$command)
 echo"<script>alert('error'); top.location='rootframe.php';</script>";
else
	echo"<script>alert('success'); top.location='rootframe.php';</script>";
?>