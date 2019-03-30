<?php

mysql_connect("localhost","root","");
mysql_select_db("library");

$user=$_REQUEST['usn'];
$name=$_REQUEST['name1'];
$desig=$_REQUEST['sem1'];

$pw=$_REQUEST['password'];
$cpw=$_REQUEST['cpassword'];
if ($pw==$cpw)
{
	$pw=md5($pw);
	$name=strtoupper($name);
	$user=strtoupper($user);
	
   mysql_query("INSERT INTO `login`(`usn`, `password`) VALUES ('$user','$pw')");
  mysql_query("INSERT INTO `faculty`(`Name`, `designation`, `username`) VALUES ('$name','$desig','$user')");
  mysql_query("INSERT INTO `role`(`username`, `role`) VALUES ('$user','regular')");
   echo"<script>alert('inserted');</script>";
   echo"<script>window.location='index2.html'</script>";
}
else
{
	echo"<script>alert('password dont match');</script>";
	 echo"<script>window.location='facreg.php'</script>";
}	
?>