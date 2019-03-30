<?php

mysql_connect("localhost","root","");
mysql_select_db("library");
$sec=$_REQUEST['sec'];
$usn=$_REQUEST['usn'];
$name=$_REQUEST['name1'];
$sem=$_REQUEST['sem1'];
$branch=$_REQUEST['branch'];
$pw=$_REQUEST['password'];
$cpw=$_REQUEST['cpassword'];
if ($pw==$cpw)
{
	$pw=md5($pw);
	$name=strtoupper($name);
	$usn=strtoupper($usn);
	$sec=strtoupper($sec);
   mysql_query("INSERT INTO `login`(`usn`, `password`) VALUES ('$usn','$pw')");
  mysql_query("INSERT INTO `details`(`usn`, `name`, `sem`, `branch`,`sec`) VALUES ('$usn','$name','$sem','$branch','$sec')");

   echo"<script>alert('inserted');</script>";
   echo"<script>window.location='index2.html'</script>";
}
else
{
	echo"<script>alert('password dont match');</script>";
	 echo"<script>window.location='reg.php'</script>";
}	
?>